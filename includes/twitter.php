<?php
$twitteroptions = array('username' => get_option(wpflybox_twitter) ,'total' => get_option(wpflybox_twitter_count), 'show_followers' => get_option(wpflybox_twitter_showfollowers), 'border-color' => '#AAA','font-color' => '#3B5998','bordertop-color' => '#315C99','bg-color' => 'transparent', 'link_followers' => get_option(wpflybox_twitter_link), 'width' => 220, 'tweetto' => get_option(wpflybox_twitter_tweetto), 'latest' => get_option(wpflybox_twitter_latest));

function wpfb_get_twitter_data($options)
  {
  $key = 'wpfb_t_' . $options['username'];
  $you = get_transient($key);
  if ($you!='' && is_string($you)){
  $you = base64_decode($you);
  $you = unserialize($you);
  }else {$you=false;}
  	if ($you !== false)
  	{
  	return $you;
  	}
require_once('TwitterAPIExchange.php');
$settings = array(
    'oauth_access_token' => "102830912-RQHOfm0Ls9zWUITBPS11LxpPmftXGuhftjU8QDuc",
    'oauth_access_token_secret' => "10mKVhjKJZN5sbbKGVkMXwFV1Je2K7TLQrwdxDUKU",
    'consumer_key' => "Ed5zIykUWHCqTuco0XcZig",
    'consumer_secret' => "8259x9CHikuJMHdXgnA1wHNxCfqMnG2TiXH46RAVZo"
); 
 //new request
$url = 'https://api.twitter.com/1.1/users/show.json';
$getfield = '?screen_name='.$options[username];
$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);
$response= $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest();             
        
  //$response = wp_remote_get("http://api.twitter.com/1/users/lookup.json?screen_name=$options[username]");
  
  if (is_wp_error($response))
		{
		return get_option($key);
    }
  $json = json_decode($response);
  if ($json->error)
    {
    return get_option($key);
    }
  if(!$json->errors){
  $you['name'] 			 	= $json->name;
  $you['screen_name']	 		= $json->screen_name;
  $you['followers_count'] 	= $json->followers_count;
  $you['profile_image_url']	= $json->profile_image_url;
  $you['friends_count']		= $json->friends_count;
  $you['description'] = $json->description;
  if ( $options['show_followers'] == 'followers' )
  			{
  			$url = 'https://api.twitter.com/1.1/followers/ids.json';
        $getfield = '?screen_name='.$options[username].'&count=20';
        $requestMethod = 'GET';
        $twitter = new TwitterAPIExchange($settings);
        $fans = $twitter->setGetfield($getfield)
                     ->buildOauth($url, $requestMethod)
                     ->performRequest();
        $fans=json_decode($fans);
  				//$fans = json_decode(wp_remote_retrieve_body(wp_remote_get("http://api.twitter.com/1/followers/ids.json?screen_name=$options[username]")));
  			}
  			else
  			{
  			
  			$url = 'https://api.twitter.com/1.1/friends/ids.json';
        $getfield = '?screen_name='.$options[username].'&count=20';
        $requestMethod = 'GET';
        $twitter = new TwitterAPIExchange($settings);
        $fans = $twitter->setGetfield($getfield)
                     ->buildOauth($url, $requestMethod)
                     ->performRequest();
        $fans=json_decode($fans);  			
  			  //$fans = json_decode(wp_remote_retrieve_body(wp_remote_get("http://api.twitter.com/1/friends/ids.json?screen_name=$options[username]")));
  				
  			}
  $twcount=count($fans->ids);			
  if ($twcount > 0 )
  {			
  $fans_ids = (string)implode( ',', array_slice($fans->ids, 0, $options['total']) );
  
    			$url = 'https://api.twitter.com/1.1/users/lookup.json';
        $getfield = '?user_id='.$fans_ids;
        $requestMethod = 'GET';
        $twitter = new TwitterAPIExchange($settings);
        $fans = $twitter->setGetfield($getfield)
                     ->buildOauth($url, $requestMethod)
                     ->performRequest();
        $fans=json_decode($fans); 
  //$fans = json_decode(wp_remote_retrieve_body(wp_remote_get("http://api.twitter.com/1/users/lookup.json?user_id=$fans_ids")));
  $followers = array();
  $twmax=$options['total'];
  if  ($twcount<$twmax){$twmax=$twcount;}          
  for($i=0; $i <= $twmax; $i++)
      {
        if (is_array($fans))
          {
          $followers[$i]['screen_name'] 		= (string)$fans[$i]->screen_name;
          $followers[$i]['profile_image_url'] = (string)$fans[$i]->profile_image_url;
          }
      }
  $you['followers'] = $followers;
  }

  if ($options['latest']=='true')
    {
 
     			$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
        $getfield = '?screen_name='.$options['username'];
        $requestMethod = 'GET';
        $twitter = new TwitterAPIExchange($settings);
        $tweet = $twitter->setGetfield($getfield)
                     ->buildOauth($url, $requestMethod)
                     ->performRequest();
        $tweet=json_decode($tweet);
    //$tweet=json_decode(file_get_contents("http://api.twitter.com/1.1/statuses/user_timeline/".$options['username'].".json")); // get tweets and decode them into a variable
    
    if ($tweet[0])
      {
      $you['latest']=$tweet[0]->text; // show latest tweet
      
      }
    }
  }//end no error
  $you1=serialize($you);
  $you1=base64_encode($you1);
  set_transient($key, $you1, 60*60*4);
  update_option($key, $you1);    
  return $you;
  
  }  

if ($twitteroptions['latest']=='true'){$twitteroptions['height']=125;}else{$twitteroptions['height']=60;}

function wpfb_show_custom_twitter($options, $you)
  {
  ?>
  
  <div style="width:<?php echo $options['width'];?>px;padding:5px 5px 5px 5px; font-family:\'Lucida grande\',tahoma,verdana,arial,sans-serif;">
  	<div style="color:#555;border-bottom:1px solid #D8DFEA;color:#555; height:<?php echo $options['height']; ?>px; position:relative;">
  		<div style="position:absolute;top:5px;left:5px;">
  			<a target="_blank" href="http://twitter.com/<?php echo $options['username'];?>">
  				<img src="<?php echo $you['profile_image_url'];?>" width="44" height="44" alt="twitter profile pic">
  			</a>
  		</div>
      <div style="position:absolute;top:5px;left:59px;font-size:14px;line-height:14px;font-weight:bold;">
        <a target="_blank" href="http://twitter.com/<?php echo $options['username'];?>" style="color:<?php echo $options['font-color'];?>">
        <?php echo $options['username'];?><span style="font-weight:normal;font-size:10px"> on Twitter</span>
        </a>
      </div>
      <div style="position:absolute;top:30px;left:60px;min-width:65px;height:20px;">
        <a href="https://twitter.com/<?php echo $options['username'];?>" class="twitter-follow-button" data-show-count="false" data-width="65px" data-show-screen-name="false">Follow @<?php echo $options['username'];?></a>
      </div>
      <?php
      if ($options['latest']=='true'){
      ?> 
      <div style="position:absolute;top:58px;left:5px;min-width:65px;height:20px; text-align:left;font-size:12px">
       <b>Latest Tweet</b>: <?php echo $you['latest']; ?>
      </div>
      <?php
      }
      ?>  
  	</div>
  	<div style="padding:0;">
  		<div style="padding:5px 5px 0px 5px;font-size:11px;">
  			<?php 
  			if ( $options['show_followers'] == 'followers')
  			{
  				echo number_format($you['followers_count']).' people follow <strong>'. $options['username'].'</strong>';
  			}
  			else
  			{
  				echo $options['username'].' follows '. number_format($you['friends_count']).' people';
  			}
  			?>	
  		</div>
  		<?php 
      $twcount=count($you['followers']);
      $twmax= $options['total'];
      if ($twmax>$twcount){$twmax=$twcount;}
      //echo $twmax;
      for($i=0; $i < $twmax; $i++)	:?>
  		
  			<span style="line-height:1;padding:5px 0px 3px 5px;width:48px;float:left;text-align: center;">
  			<?php if($options['link_followers'] == 'on' ): ?>
  				<a target="_blank" href="http://twitter.com/<?php echo $you['followers'][$i]['screen_name'];?>" style="color:gray" rel="nofollow">
  			<?php endif;?>	
  					<img src="<?php echo $you['followers'][$i]['profile_image_url'];?>" width="48" height="48" alt="twitter users">
  					<span style="font-family:Arial;font-size:10px;"><?php echo substr($you['followers'][$i]['screen_name'], 0, 8);?></span>
  			<?php if($options['link_followers'] == 'on' ): ?>		
  				</a>
  			<?php endif;?>		
  			</span>
  		<? endfor;?>
  	<?php if ($options['total']>0){echo '<br style="clear:both">';} ?>
  	</div>
  <?php
  if ($options['tweetto']=='on')
    {
    echo '<div style="padding:6px 0px 6px 0px;"><a href="https://twitter.com/intent/tweet?screen_name='.$options[username].'" class="twitter-mention-button" data-lang="en">Tweet to @'.$options[username].'</a></div>'; 
    }
  ?>
  </div>
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
  </script>
  <?php
  }     

$you = wpfb_get_twitter_data($twitteroptions);

echo '<div class="wpfb-twitter" id="wpfb-twitter">
        <div class="wpfb-twitter-transition">
          <table class="wpflyboxtable">
            <tr style="background:transparent">';
if (get_option(wpflybox_side)=="right")
  {
  echo '<th style="vertical-align:top">';
  if (get_option(wpflybox_usecustombutton) == "true")
    {
    echo '<a class="wpflybox_button" href="#"><img src="'.WP_PLUGIN_URL.'/wp-flybox/static/icons/twitter.png" height="30" alt="T"></a>';
    } else {
    echo'<a href="#"><div style="margin-left:0px; margin-top:0px; width:33px; height:101px; background-position:0px -606px; background-image:url(\''.WP_PLUGIN_URL.'/wp-flybox/static/FlyBoxSpriteRight.png\');padding:0px;"> </div></a>';
    }
    echo '</th>';
  }
echo '<th style="background-color:#fff; border: 2px solid #6CC5FF;width:232px;overflow:hidden;padding:0px;">';
if($you && get_option(wpflybox_custom_twitter)!== 'false')
  {
  wpfb_show_custom_twitter($twitteroptions, $you);
  } else {
  echo '<script type="text/javascript" src="'.WP_PLUGIN_URL.'/wp-flybox/static/twitterbox.js"></script><div id="twitterfanbox"></div><script type="text/javascript">fanbox_init("'.$twitteroptions[username].'");</script>';
  }      
echo '</th>';
if (get_option(wpflybox_side)=="left")
  {
  echo '<th style="vertical-align:top">';
  if (get_option(wpflybox_usecustombutton) == "true")
    {
    echo '<a class="wpflybox_button" href="#"><img src="'.WP_PLUGIN_URL.'/wp-flybox/static/icons/twitter.png" height="30" alt="T"></a>';
    } else {
    echo'<a href="#"><div style="margin-left:0px; margin-top:0px; width:33px; height:101px; background-position:0px -606px; background-image:url(\''.WP_PLUGIN_URL.'/wp-flybox/static/FlyBoxSpriteLeft.png\');padding:0px;"> </div></a>';
    }
    echo '</th>';
  }
echo '</tr>
      </table>
      </div>
      </div>';
      
?>

