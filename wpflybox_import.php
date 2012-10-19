<?php
$wpflybox_count=get_option(wpflybox_count);
$wpflybox_start=get_option(wpflybox_start);
$wpflybox_seperation=get_option(wpflybox_seperation);
$wpflybox_tabs[1]=get_option(wpflybox_tab1);
$wpflybox_tabs[2]=get_option(wpflybox_tab2);
$wpflybox_tabs[3]=get_option(wpflybox_tab3);
$wpflybox_tabs[4]=get_option(wpflybox_tab4);
$wpflybox_tabs[5]=get_option(wpflybox_tab5);
$wpflybox_tabs[6]=get_option(wpflybox_tab6);
$wpflybox_tabs[7]=get_option(wpflybox_tab7);
$wpflybox_tabs[8]=get_option(wpflybox_tab8);
$wpflybox_postdim='';
$wpflybox_facebook=get_option(wpflybox_facebook);
$wpflybox_facebook_header=get_option(wpflybox_facebook_header);
$wpflybox_facebook_stream=get_option(wpflybox_facebook_stream);
$wpflybox_facebook_showfaces=get_option(wpflybox_facebook_showfaces);
$wpflybox_facebook_color=get_option(wpflybox_facebook_color);
$wpflybox_facebook_height=get_option(wpflybox_facebook_height);
$wpflybox_facebook_width=get_option(wpflybox_facebook_width);
$wpflybox_facebook_width_36=$wpflybox_facebook_width_36+36;

$wpflybox_twitter=get_option(wpflybox_twitter);
$wpflybox_twitter_count=get_option(wpflybox_twitter_count);
$wpflybox_twitter_showfollowers=get_option(wpflybox_twitter_showfollowers);
$wpflybox_twitter_link=get_option(wpflybox_twitter_link);
$wpflybox_twitter_tweetto=get_option(wpflybox_twitter_tweetto);

$wpflybox_google=get_option(wpflybox_google);
$wpflybox_youtube=get_option(wpflybox_youtube);
$wpflybox_feedburner=get_option(wpflybox_feedburner);
$wpflybox_pinterest=get_option(wpflybox_pinterest);
$wpflybox_linkedin=get_option(wpflybox_linkedin);
$wpflybox_linkedin_type=get_option(wpflybox_linkedin_type);
//$wpflybox_ie=get_option(wpflybox_ie);
$wpflybox_ie="true";
$wpflybox_mobile=get_option(wpflybox_mobile);
$wpflybox_isie=strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE').strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome');

$wpflybox_captcha=get_option(wpflybox_captcha);
$wpflybox_contactemail=get_option(wpflybox_contactemail);
$wpflybox_contactwho=get_option(wpflybox_contactwho);
$wpflybox_contactencrypted = base64_encode($wpflybox_contactemail);

if ($wpflybox_contactwho == "us"){$wpflybox_contactwhopixel="1111";} else {$wpflybox_contactwhopixel="707";} 

$wpflybox_flickr=get_option(wpflybox_flickr);
$wpflybox_flickr_tag=get_option(wpflybox_flickr_tag);

$wpflybox_deviant_username=get_option(wpflybox_deviant_username);
$wpflybox_deviant_limit=get_option(wpflybox_deviant_limit);
$wpflybox_deviant_max_width=get_option(wpflybox_deviant_max_width);
$wpflybox_deviant_max_height=get_option(wpflybox_deviant_max_height);
$wpflybox_deviant_columns=get_option(wpflybox_deviant_columns);
$wpflybox_deviant_frame_width=get_option(wpflybox_deviant_frame_width);
$wpflybox_deviant_frame_height=get_option(wpflybox_deviant_frame_height);
$wpflybox_deviant_total_frame_width=$wpflybox_deviant_frame_width+36+32;
$wpflybox_deviant_total_frame_width_left=$wpflybox_deviant_total_frame_width-32;
$wpflybox_deviant_left=($wpflybox_deviant_total_frame_width-32)*(-1);
$wpflybox_deviant_right=$wpflybox_deviant_left;

$wpflybox_instagram_id=get_option(wpflybox_instagram_id);
$wpflybox_instagram_token=get_option(wpflybox_instagram_token);
$wpflybox_instagram_max=get_option(wpflybox_instagram_max);
$wpflybox_instagram_header=get_option(wpflybox_instagram_header);

$wpflybox_usecurl=get_option(wpflybox_usecurl);

$wpflybox_usecustombutton=get_option(wpflybox_usecustombutton);
$wpflybox_custombuttonloc=plugins_url()."/wp-flybox/static/icons/";
$wpflybox_bgtopgradient=get_option(wpflybox_bgtopgradient);		
$wpflybox_bgbottomgradient=get_option(wpflybox_bgbottomgradient);       			
$wpflybox_bgborder=get_option(wpflybox_bgborder);                         

$wpflybox_vimeo_username=get_option(wpflybox_vimeo_username);
$wpflybox_vimeo_total=get_option(wpflybox_vimeo_total);

$mobile_browser = '0';
 
if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android)/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
    $mobile_browser++;
}
 
if ((strpos(strtolower($_SERVER['HTTP_ACCEPT']),'application/vnd.wap.xhtml+xml') > 0) or ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))) {
    $mobile_browser++;
}    
 
$mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'], 0, 4));
$mobile_agents = array(
    'w3c ','acs-','alav','alca','amoi','audi','avan','benq','bird','blac',
    'blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno',
    'ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-',
    'maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-',
    'newt','noki','oper','palm','pana','pant','phil','play','port','prox',
    'qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar',
    'sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-',
    'tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp',
    'wapr','webc','winw','winw','xda ','xda-');
 
if (in_array($mobile_ua,$mobile_agents)) {
    $mobile_browser++;
}
 
if (strpos(strtolower($_SERVER['ALL_HTTP']),'OperaMini') > 0) {
    $mobile_browser++;
}
 
if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'windows') > 0) {
    $mobile_browser = 0;
}
 
if ($mobile_browser > 0 && $wpflybox_mobile=="false") {
   // do nothing
}
else if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false && $wpflybox_ie=="false"){
   //do nothing
}
else {


if (strpos($wpflybox_start,'%') !== false && strpos($wpflybox_seperation,'%') !== false) {
    //has %
    $wpflybox_postdim='%';
    $wpflybox_start = str_replace("%", "", $wpflybox_start);
    $wpflybox_seperation = str_replace("%", "", $wpflybox_seperation);
    
    $wpflybox_pos[1]=$wpflybox_start.$wpflybox_postdim.'';
    $wpflybox_pos[2]=($wpflybox_start+$wpflybox_seperation).$wpflybox_postdim.'';
    $wpflybox_pos[3]=($wpflybox_start+(2*$wpflybox_seperation)).$wpflybox_postdim.'';
    $wpflybox_pos[4]=($wpflybox_start+(3*$wpflybox_seperation)).$wpflybox_postdim.'';
    $wpflybox_pos[5]=($wpflybox_start+(4*$wpflybox_seperation)).$wpflybox_postdim.'';
    $wpflybox_pos[6]=($wpflybox_start+(5*$wpflybox_seperation)).$wpflybox_postdim.'';
    $wpflybox_pos[7]=($wpflybox_start+(6*$wpflybox_seperation)).$wpflybox_postdim.'';
    $wpflybox_pos[8]=($wpflybox_start+(7*$wpflybox_seperation)).$wpflybox_postdim.'';
}
if (strpos($wpflybox_start,'px') !== false && strpos($wpflybox_seperation,'px') !== false) {
    //has px
    $wpflybox_postdim='px';
    $wpflybox_start = str_replace("px", "", $wpflybox_start);
    $wpflybox_seperation = str_replace("px", "", $wpflybox_seperation);
    
    $wpflybox_pos[1]=$wpflybox_start.$wpflybox_postdim.'';
    $wpflybox_pos[2]=($wpflybox_start+$wpflybox_seperation).$wpflybox_postdim.'';
    $wpflybox_pos[3]=($wpflybox_start+(2*$wpflybox_seperation)).$wpflybox_postdim.'';
    $wpflybox_pos[4]=($wpflybox_start+(3*$wpflybox_seperation)).$wpflybox_postdim.'';
    $wpflybox_pos[5]=($wpflybox_start+(4*$wpflybox_seperation)).$wpflybox_postdim.'';
    $wpflybox_pos[6]=($wpflybox_start+(5*$wpflybox_seperation)).$wpflybox_postdim.'';
    $wpflybox_pos[7]=($wpflybox_start+(6*$wpflybox_seperation)).$wpflybox_postdim.'';
    $wpflybox_pos[8]=($wpflybox_start+(7*$wpflybox_seperation)).$wpflybox_postdim.'';
}

//twitter function
//some of this came from Twitter Like Box by timersys
function show_twitter($options)
{
$key = 'wpfb_' . $options['username'];

$you = get_transient($key);
	if ($you !== false)
	{
		$you = $you;
		//echo 'cached';
	} else
	{

$response = wp_remote_get("http://api.twitter.com/1/users/lookup.json?screen_name=$options[username]");

if (is_wp_error($response))
		{
			// In case Twitter is down we return the last successful count
			$you = get_option($key);
		}
		else
		{
		
$json = json_decode(wp_remote_retrieve_body($response));
if (is_array($json)){
$you['name'] 			 	= $json[0]->name;
$you['screen_name']	 		= $json[0]->screen_name;
$you['followers_count'] 	= $json[0]->followers_count;
$you['profile_image_url']	= $json[0]->profile_image_url;
$you['friends_count']		= $json[0]->friends_count;
$you['description'] = $json[0]->description;
if ( $options['show_followers'] == 'followers' && $you['followers_count'] > 0)
			{
				$fans = json_decode(wp_remote_retrieve_body(wp_remote_get("http://api.twitter.com/1/followers/ids.json?screen_name=$options[username]")));
				
			}
			else if ($you['friends_count'] > 0)
			{
			  $fans = json_decode(wp_remote_retrieve_body(wp_remote_get("http://api.twitter.com/1/friends/ids.json?screen_name=$options[username]")));
				
			}
			
$fans_ids = (string)implode( ',', array_slice($fans->ids, 0, $options['total']) );
$fans = json_decode(wp_remote_retrieve_body(wp_remote_get("http://api.twitter.com/1/users/lookup.json?user_id=$fans_ids")));


$followers = array();            
for($i=0; $i <= $options['total']; $i++)
    {
      $followers[$i]['screen_name'] 		= (string)$fans[$i]->screen_name;
      $followers[$i]['profile_image_url'] = (string)$fans[$i]->profile_image_url;
    }
$you['followers'] = $followers;

//$tweet=json_decode(wp_remote_retrieve_body(wp_remote_get("http://api.twitter.com/1/statuses/user_timeline.json?screen_name=$options['username']&count=1&include_rts=false");
//$you['latesttweet'] = $tweet['0']->text;
//$you['description']


// Store the result in a transient, expires after 3 hours
// Also store it as the last successful using update_option
set_transient($key, $you, 60*60*2);
update_option($key, $you);    
} else {
echo '<b>Error</b>.<br />Invalid username or reached api limit.<br />';
}
}
}





?>

<div style="width:<?php echo $options['width'];?>px;padding:5px 5px 5px 5px; font-family:\'Lucida grande\',tahoma,verdana,arial,sans-serif;">
	<div style="color:#555;border-bottom:1px solid #D8DFEA;color:#555; height:60px; position:relative;">
		<div style="position:absolute;top:5px;left:5px;">
			<a target="_blank" href="http://twitter.com/<?php echo $options['username'];?>">
				<img src="<?php echo $you['profile_image_url'];?>" width="44" height="44">
			</a>
		</div>
    <div style="position:absolute;top:5px;left:59px;font-size:14px;line-height:14px;font-weight:bold;">
      <a target="_blank" href="http://twitter.com/<?php echo $options['username'];?>" style="color:<?php echo $options['font-color'];?>">
      <?php echo $options['username'];?><span style="font-weight:normal;font-size:10px"> on Twitter</span>
      </a>
    </div>
    <div style="position:absolute;top:30px;left:59px;">
      <a href="https://twitter.com/<?php echo $options['username'];?>" class="twitter-follow-button" data-show-count="false" data-width="65px" data-show-screen-name="false">Follow @<?php echo $options['username'];?></a>
    </div>
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
				echo $options['username'].' follows '. number_format($you['friends_count']).' users';
			}
			?>	
		</div>
		<?php for($i=0; $i < $options['total']; $i++)	:?>
		
			<span style="line-height:1;padding:5px 0px 3px 5px;width:48px;float:left;text-align: center;">
			<?php if($options['link_followers'] == 'on' ): ?>
				<a target="_blank" href="http://twitter.com/<?php echo $you['followers'][$i]['screen_name'];?>" style="color:gray" rel="nofollow">
			<?php endif;?>	
					<img src="<?php echo $you['followers'][$i]['profile_image_url'];?>" width="48" height="48">
					<span style="font-family:Arial;font-size:10px;"><?php echo substr($you['followers'][$i]['screen_name'], 0, 8);?></span>
			<?php if($options['link_followers'] == 'on' ): ?>		
				</a>
			<?php endif;?>		
			</span>
		<? endfor;?>
	<br style="clear:both">
	</div>
<?php
if ($options['tweetto']=='on'){
echo '<a href="https://twitter.com/intent/tweet?screen_name='.$options[username].'" class="twitter-mention-button" data-lang="en">Tweet to @'.$options[username].'</a>';
}
?>


</div>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
</script>


<?php
}


//vimeo function
function show_vimeo($options)
{
$key = 'wpfb_v_' . $options['username'];
$you = get_transient($key);
	if ($you !== false)
	{
		$you = $you;
		//echo 'cached';
	} else
	{

$response = wp_remote_get("http://vimeo.com/api/v2/$options[username]/info.json");

  if (is_wp_error($response))
		{
			// In case Twitter is down we return the last successful count
			$you = get_option($key);
		}
		else
		{
		$json = json_decode(wp_remote_retrieve_body($response));

      $you['name'] = $json->display_name;
      $you['profile_url'] = $json->profile_url;
      $you['videos_url'] = $json->videos_url;
      $you['total_videos_uploaded'] = $json->total_videos_uploaded;
      $you['portrait_medium'] = $json->portrait_medium;
      if ( $options['show_videos'] == 'true' || 1==1)
        {
        $videojson = json_decode(wp_remote_retrieve_body(wp_remote_get("http://vimeo.com/api/v2/$options[username]/videos.json")));
        $videos = array();            
        for($i=0; $i <= $options['total']; $i++)
          {
          $videos[$i]['id'] 		= $videojson[$i]->id;
          $videos[$i]['title'] 		= $videojson[$i]->title;
          $videos[$i]['url'] 		= $videojson[$i]->url;
          $videos[$i]['thumbnail_small'] 		= $videojson[$i]->thumbnail_small;
          }
        $you['videos'] = $videos;
        
        }
                                                                                        

      set_transient($key, $you, 60*60*2);
      update_option($key, $you);    
    }
  }
?>  
<div style="width:210px;padding:5px 5px 5px 5px; font-family:\'Lucida grande\',tahoma,verdana,arial,sans-serif;">
	<div style="color:#555;border-bottom:1px solid #bcd822;color:#555; height:60px; position:relative;">
		<div style="position:absolute;top:5px;left:5px;">
			<a target="_blank" href="<?php echo $you['profile_url'];?>">
				<img src="<?php echo $you['portrait_medium'];?>" width="50" height="50">
			</a>
		</div>
    <div style="position:absolute;top:5px;left:59px;font-size:14px;line-height:14px;font-weight:bold;">
      <a target="_blank" href="<?php echo $you['profile_url'];?>" style="color:#3cadc9">
      <?php echo $you['name'];?><span style="font-weight:normal;font-size:10px"> on Vimeo</span>
      </a>
    </div>
    <div style="position:absolute;top:30px;left:59px;"> 
      Videos: 
      <a target="_blank" href="<?php echo $you['videos_url']; ?>" style="color:#3cadc9">
      <b><?php echo number_format($you['total_videos_uploaded']); ?></b>
      </a>  
    </div> 
	</div>
<?php 			
  if ( $options['total'] > 0)
		{ ?>	
  <div style="padding:0px;">
		<?php for($i=0; $i < $options['total']; $i++)	:?>
		
			<span style="line-height:1;padding:5px 2px 5px 2px;width:48px;height:66px;float:left;text-align:center;overflow:hidden">
				<a target="_blank" href="<?php echo $you['videos'][$i]['url'];?>" style="color:gray" rel="nofollow">	
					<img src="<?php echo $you['videos'][$i]['thumbnail_small'];?>" width="48" height="48">
					<span style="font-family:Arial;font-size:10px;"><?php echo substr($you['videos'][$i]['title'], 0, 18);?></span>
				</a>		
			</span>
		<? endfor;?>
	<br style="clear:both">
	</div>
<?php } ?>
</div>
<?php      
}

//deviantart
function show_deviantart ($options){
$username=$options["username"];
$limit=$options["limit"];
$max_width=$options["max_width"];
$max_height=$options["max_height"];
$columns=$options["columns"];
$key = 'wpfb_da_' . $username;
$content = get_transient($key);
	if ($content !== false)
	{
		$you = $you;
		//echo 'cached';
	} else
	{
 

	function parseRSS($url) { 
        $feedeed = implode('', file($url));
        $parser = xml_parser_create();
        xml_parse_into_struct($parser, $feedeed, $valueals, $index);
        xml_parser_free($parser);

        foreach($valueals as $keyey => $valueal){
            if($valueal['type'] != 'cdata') {
                $item[$keyey] = $valueal;
			}
        } 
        $i = 0;
        foreach($item as $key => $value){
            if($value['type'] == 'open') {
                $i++;
                $itemame[$i] = $value['tag']; 
            } elseif($value['type'] == 'close') { 
                $feed = $values[$i];
                $item = $itemame[$i];
                $i--; 
                if(count($values[$i])>1){
                    $values[$i][$item][] = $feed;
                } else {
                    $values[$i][$item] = $feed;
                } 
            } else {
                $values[$i][$value['tag']] = $value['value'];  
            }
        } 
        return $values[0];
	}  
	//PARSE THE RSS FEED INTO ARRAY
	$xml = parseRSS("http://backend.deviantart.com/rss.xml?type=deviation&q=by%3A".$username."+sort%3Atime+meta%3Aall");

  $k=0;
	foreach($xml['RSS']['CHANNEL']['ITEM'] as $item) if ($k<$limit){
  $picture[$k] = parseRSS("http://backend.deviantart.com/oembed?url={$item['LINK']}&format=xml");
  //Get width to height ratio for maxes
  $ratio=$picture[$k]["OEMBED"]["THUMBNAIL_WIDTH"]/$picture[$k]["OEMBED"]["THUMBNAIL_HEIGHT"];
  //Set dimensions with maxes
  if ($ratio>1)
    {
    $height[$k]=$max_height;
    $width[$k]=round($ratio*$height[$k]);
    if ($width[$k]>$max_width)
      {
      $width[$k]=$max_width;
      $height[$k]=round((1/$ratio)*$width[$k]);
      }
    } else if ($ratio<=1)
    {
    $width[$k]=$max_width;
    $height[$k]=round((1/$ratio)*$width[$k]);
    if ($height[$k]>$max_height)
      {
      $height[$k]=$max_height;
      $width[$k]=round($ratio*$height[$k]);
      }   
    }   
  
  //store contents
  $content[$k]='<a href="'.$item["LINK"].'" target="blank" style="border:none;"><img style="vertical-align:middle;padding:1px;border:none;" border="0" src="'.$picture[$k]["OEMBED"]["THUMBNAIL_URL_150"].'" height="'.$height[$k].'" width="'.$width[$k].'" title="'.$item["TITLE"].'"></a>'; 
  $k=$k+1;
  } //end foreach 
      set_transient($key, $content, 60*60*2);
      update_option($key, $content);
  } 
$k=0;  
//display contents
echo '<div style="width:100%;margin:0px;padding:0px;"><center>';
?>
<div style="position:relative;font-size:14px;line-height:14px;font-weight:bold;text-decoration:none;">
      <a target="_blank" href="http://<?php echo $username;?>.deviantart.com" style="color:#506256;text-decoration:none;">
      <?php echo $username;?><span style="font-weight:normal;font-size:10px;text-decoration:none;"> on diviantART</span>
      </a>
    </div>
<?php
while ($k<$limit)
  {  
  $j=0;
  while ($j<$columns)
    {
    echo $content[$k];
    $k=$k+1;
    $j=$j+1;
    }
  echo '<br />';  
  }
echo '</center></div>';
}





if (get_option(wpflybox_side)=="left"){
if ($wpflybox_isie>0){
if (get_option(wpflybox_jquery)=="on"){
?>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js' type='text/javascript'></script>
<?php 
}
?>
<script type='text/javascript'> 
jQuery(document).ready (
function(){jQuery("#wpfb-facebook").hover(function(){ jQuery(this).stop(true,false).animate({left:  0}, 500); },
function(){ jQuery("#wpfb-facebook").stop(true,false).animate({left: -328}, 500); });       
jQuery("#wpfb-twitter").hover(function(){ jQuery(this).stop(true,false).animate({left:  0}, 500); },
function(){ jQuery("#wpfb-twitter").stop(true,false).animate({left: -266}, 500); });     
jQuery("#wpfb-googleplus").hover(function(){ jQuery(this).stop(true,false).animate({left:  0}, 500); },
function(){ jQuery("#wpfb-googleplus").stop(true,false).animate({left: -361}, 500); });    
jQuery("#wpfb-youtube").hover(function(){ jQuery(this).stop(true,false).animate({left:  0}, 500); },
function(){ jQuery("#wpfb-youtube").stop(true,false).animate({left: -336}, 500); });  
jQuery("#wpfb-subscribe").hover(function(){ jQuery(this).stop(true,false).animate({left:  0}, 500); },
function(){ jQuery("#wpfb-subscribe").stop(true,false).animate({left: -326}, 500); });
jQuery("#wpfb-pinterest").hover(function(){ jQuery(this).stop(true,false).animate({left:  0}, 500); },
function(){ jQuery("#wpfb-pinterest").stop(true,false).animate({left: -290}, 500); }); 
jQuery("#wpfb-linkedin").hover(function(){ jQuery(this).stop(true,false).animate({left:  0}, 500); },
function(){ jQuery("#wpfb-linkedin").stop(true,false).animate({left: -400}, 500); }); 
jQuery("#wpfb-contact").hover(function(){ jQuery(this).stop(true,false).animate({left:  0}, 500); },
function(){ jQuery("#wpfb-contact").stop(true,false).animate({left: -316}, 500); }); 
jQuery("#wpfb-flickr").hover(function(){ jQuery(this).stop(true,false).animate({left:  0}, 500); },
function(){ jQuery("#wpfb-flickr").stop(true,false).animate({left: -149}, 500); });   
jQuery("#wpfb-deviant").hover(function(){ jQuery(this).stop(true,false).animate({left:  0}, 500); },
function(){ jQuery("#wpfb-deviant").stop(true,false).animate({left: <?php echo $wpflybox_deviant_left; ?>}, 500); });  
jQuery("#wpfb-instagram").hover(function(){ jQuery(this).stop(true,false).animate({left:  0}, 500); },
function(){ jQuery("#wpfb-instagram").stop(true,false).animate({left: -232}, 500); });  
jQuery("#wpfb-vimeo").hover(function(){ jQuery(this).stop(true,false).animate({left:  0}, 500); },
function(){ jQuery("#wpfb-vimeo").stop(true,false).animate({left: -256}, 500); });  
});
</script>
<?php
}

$wpflybox_sprite_url=plugins_url()."/wp-flybox/static/FlyBoxSpriteLeft.png";
$wpflybox_pinterest_button_url=plugins_url()."/wp-flybox/static/pinterest-button.png";
?>
<style type="text/css">
table.wpflyboxtable, .wpflyboxtable tbody, .wpflyboxtable th, .wpflyboxtable tr, .wpflyboxtable td, table.wpflyboxtable th, table.wpflyboxtable tr:hover, table.wpflyboxtable tr{margin: 0;padding: 0;border: 0;outline: 0;font-size: 100%;background: transparent;vertical-align:top;display: table-cell;font-weight: normal;text-align: center;border-spacing:0px;}
<?php
if ($wpflybox_usecustombutton == "true")
  {
  ?>
  .wpflybox_button {
   border-top: 1px solid #<?php echo $wpflybox_bgborder;?>;
   border-right: 1px solid #<?php echo $wpflybox_bgborder;?>;
   border-bottom: 1px solid #<?php echo $wpflybox_bgborder;?>;
   background: #000000;
   background: -webkit-gradient(linear, right top, left top, from(#<?php echo $wpflybox_bgtopgradient;?>), to(#<?php echo $wpflybox_bgbottomgradient;?>));
   background: -webkit-linear-gradient(right, #<?php echo $wpflybox_bgtopgradient;?>, #<?php echo $wpflybox_bgbottomgradient;?>);
   background: -moz-linear-gradient(right, #<?php echo $wpflybox_bgtopgradient;?>, #<?php echo $wpflybox_bgbottomgradient;?>);
   background: -ms-linear-gradient(right, #<?php echo $wpflybox_bgtopgradient;?>, #<?php echo $wpflybox_bgbottomgradient;?>);
   background: -o-linear-gradient(right, #<?php echo $wpflybox_bgtopgradient;?>, #<?php echo $wpflybox_bgbottomgradient;?>);
   display:block;
   height:32px;
   width: 32px;
   margin: 0px;
   padding: 0px;
   -webkit-border-radius: 0px 9px 9px 0px;
   -moz-border-radius: 0px 9px 9px 0px;
   border-radius: 0px 9px 9px 0px;
   color: #ffffff;
   font-size: 10px;
   font-family: Georgia, serif;
   text-decoration: none;
   vertical-align: middle;
   z-index:800;
   }
  .wpflybox_button img{
   padding:0px;
   }
   .wpflybox_button img:hover {
   -webkit-border-radius: 0px 9px 9px 0px;
   -moz-border-radius: 0px 9px 9px 0px;
   border-radius: 0px 9px 9px 0px;
   padding:0px;   
   border-bottom:0px hidden;
   background: #000000;
   background: -webkit-gradient(linear, right top, left top, from(#<?php echo $wpflybox_bgtopgradient;?>), to(#<?php echo $wpflybox_bgbottomgradient;?>));
   background: -webkit-linear-gradient(right, #<?php echo $wpflybox_bgtopgradient;?>, #<?php echo $wpflybox_bgbottomgradient;?>);
   background: -moz-linear-gradient(right, #<?php echo $wpflybox_bgtopgradient;?>, #<?php echo $wpflybox_bgbottomgradient;?>);
   background: -ms-linear-gradient(right, #<?php echo $wpflybox_bgtopgradient;?>, #<?php echo $wpflybox_bgbottomgradient;?>);
   background: -o-linear-gradient(right, #<?php echo $wpflybox_bgtopgradient;?>, #<?php echo $wpflybox_bgbottomgradient;?>);
   color: #000000;
   }
   
   <?php
  }
$i=1;
while ($i <= $wpflybox_count)
    {
    if ($wpflybox_tabs[$i]=="facebook")
        {
        echo 'div.wpfb-facebook {width:360px;top:'.$wpflybox_pos[$i].';left:-328px;position:fixed;z-index:900;text-align:right;direction:ltr;}';
        echo 'div.wpfb-facebook div.wpfb-facebook-transition {margin-left: 32px;-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        echo 'div.wpfb-facebook div.wpfb-facebook-transition iframe {border:0px;overflow:hidden;position:static;height:260px;}';
        if (!$wpflybox_isie){echo 'div.wpfb-facebook:hover div.wpfb-facebook-transition {margin-left: 360px;}';} 
        }
    if ($wpflybox_tabs[$i]=="twitter")
        {
        echo 'div.wpfb-twitter a img, img, a:hover, a:hover img {border: 0;padding: 0px}';
        echo 'div.wpfb-twitter {width:298px;top:'.$wpflybox_pos[$i].';left:-266px;position:fixed;z-index:900;direction:ltr;}';
        echo 'div.wpfb-twitter div.wpfb-twitter-transition {margin-left: 32px;-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        if (!$wpflybox_isie){echo 'div.wpfb-twitter:hover div.wpfb-twitter-transition {margin-left: 298px;}';}  
        }
    if ($wpflybox_tabs[$i]=="googleplus")
        {
        echo 'div.wpfb-googleplus {width:393px;top:'.$wpflybox_pos[$i].';left:-361px;position:fixed;z-index:900;direction:ltr;}';
        echo 'div.wpfb-googleplus div.wpfb-googleplus-transition {margin-left:32px;-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        echo 'div.wpfb-googleplus div.wpfb-googleplus-transition iframe {border:0px;overflow:hidden;position:static;}';
        if (!$wpflybox_isie){echo 'div.wpfb-googleplus:hover div.wpfb-googleplus-transition {margin-left: 393px;}';} 
        }
    if ($wpflybox_tabs[$i]=="youtube")
        {        
        echo 'div.wpfb-youtube {width:368px;height:110px;top:'.$wpflybox_pos[$i].';left:-336px;position:fixed;z-index:900;direction:ltr;}';
        echo 'div.wpfb-youtube div.wpfb-youtube-transition {margin-left:32px;-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        if (!$wpflybox_isie){echo 'div.wpfb-youtube:hover div.wpfb-youtube-transition {margin-left: 368px;}';}
        }
    if ($wpflybox_tabs[$i]=="subscription")
        {
        echo 'div.wpfb-subscribe {width:358px;height:101px;top:'.$wpflybox_pos[$i].';left:-326px;position:fixed;z-index:900;direction:ltr;}';
        echo 'div.wpfb-subscribe div.wpfb-subscribe-transition {margin-left:32px;-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        if (!$wpflybox_isie){echo 'div.wpfb-subscribe:hover div.wpfb-subscribe-transition {margin-left: 358px;}';}   
        }    
    if ($wpflybox_tabs[$i]=="pinterest")
        {     
        echo 'div.wpfb-pinterest {width:322px;height:101px;top:'.$wpflybox_pos[$i].';left:-290px;position:fixed;z-index:900;direction:ltr;}';
        echo 'div.wpfb-pinterest div.wpfb-pinterest-transition {margin-left:32px;-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        if (!$wpflybox_isie){echo 'div.wpfb-pinterest:hover div.wpfb-pinterest-transition {margin-left: 322px;}';}
        }
    if ($wpflybox_tabs[$i]=="linkedin")
        {         
        echo 'div.wpfb-linkedin {width:432px;height:168px;top:'.$wpflybox_pos[$i].';left:-400px;position:fixed;z-index:900;direction:ltr;}';
        echo 'div.wpfb-linkedin div.wpfb-linkedin-transition {margin-left:32px;-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        echo 'div.wpfb-linkedin div.wpfb-facebook-transition iframe {border:0px;overflow:hidden;position:static;height:260px;}';
        if (!$wpflybox_isie){echo 'div.wpfb-linkedin:hover div.wpfb-linkedin-transition {margin-left: 432px;}';}
        }
    if ($wpflybox_tabs[$i]=="contact")
        {
        echo 'div.wpfb-contact {width:348px;height:300px;top:'.$wpflybox_pos[$i].';left:-316px;position:fixed;z-index:900;direction:ltr;}';
        echo 'div.wpfb-contact div.wpfb-contact-transition {margin-left:32px;-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        echo 'div.wpfb-contact div.wpfb-contact-transition iframe {border:0px;overflow:hidden;position:static;height:260px;}';
        if (!$wpflybox_isie){echo 'div.wpfb-contact:hover div.wpfb-contact-transition {margin-left: 348px;}';}                 
        }
    if ($wpflybox_tabs[$i]=="flickr")
        {
        echo 'div.wpfb-flickr {width:181px;height:155px;top:'.$wpflybox_pos[$i].';left:-149px;position:fixed;z-index:900;direction:ltr;}';
        echo 'div.wpfb-flickr div.wpfb-flickr-transition {margin-left:32px;-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        echo 'div.wpfb-flickr div.wpfb-flickr-transition iframe {border:0px;overflow:hidden;position:static;}';
        if (!$wpflybox_isie){echo 'div.wpfb-flickr:hover div.wpfb-flickr-transition {margin-left: 181px;}';}               
        }
    if ($wpflybox_tabs[$i]=="deviant")
        {
        echo 'div.wpfb-deviant {width:'.$wpflybox_deviant_total_frame_width.'px;top:'.$wpflybox_pos[$i].';left:'.$wpflybox_deviant_left.'px;position:fixed;z-index:900;direction:ltr;}';
        echo 'div.wpfb-deviant div.wpfb-deviant-transition {width:'.$wpflybox_deviant_total_frame_width.'px;margin-left: 32px;-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        if (!$wpflybox_isie){echo 'div.wpfb-deviant:hover div.wpfb-deviant-transition {margin-left:'.$wpflybox_deviant_total_frame_width.'px;}';} 
        }
    if ($wpflybox_tabs[$i]=="instagram")
        {
        echo 'div.wpfb-instagram a:hover, a:hover img {border:none;}';           
        echo 'div.wpfb-instagram {width:264px;top:'.$wpflybox_pos[$i].';left:-232px;position:fixed;z-index:900;direction:ltr;}';
        echo 'div.wpfb-instagram div.wpfb-instagram-transition {margin-left:32px;-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        echo 'div.wpfb-instagram div.wpfb-instagram-transition iframe {border:0px;overflow:hidden;position:static;height:260px;}';
        if (!$wpflybox_isie){echo 'div.wpfb-instagram:hover div.wpfb-instagram-transition {margin-left: 264px;}';}          
        }
    if ($wpflybox_tabs[$i]=="vimeo")
        {
        echo 'div.wpfb-vimeo a img, img, a:hover, a:hover img {border: 0;padding: 0px}';         
        echo 'div.wpfb-vimeo {width:288; top:'.$wpflybox_pos[$i].';left:-256px;position:fixed;z-index:900;direction:ltr;}';
        echo 'div.wpfb-vimeo div.wpfb-vimeo-transition {margin-left:32px;-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        if (!$wpflybox_isie){echo 'div.wpfb-vimeo:hover div.wpfb-vimeo-transition {margin-left: 288px;}';}          
        }        
                                         
        
    $i=$i+1;    
    }
    
?>    
</style>


<?php
$i=1;
while ($i <= $wpflybox_count)
    {
    if ($wpflybox_tabs[$i]=="facebook")
        {
        ?>
        <div class="wpfb-facebook" id="wpfb-facebook"><div class="wpfb-facebook-transition"><table class="wpflyboxtable"><tr style="background:transparent"><th style="background-color:#fff; border: 2px solid #3c95d9;width:292px;overflow:hidden;padding:0px;"><iframe src="http://www.facebook.com/plugins/likebox.php?href=<?php echo $wpflybox_facebook; ?>&amp;locale=en_GB&amp;width=<?php echo $wpflybox_facebook_width; ?>&amp;height=<?php echo $wpflybox_facebook_height; ?>&amp;colorscheme=<?php echo $wpflybox_facebook_color; ?>&amp;show_faces=<?php echo $wpflybox_facebook_showfaces; ?>&amp;stream=<?php echo $wpflybox_facebook_stream; ?>&amp;header=<?php echo $wpflybox_facebook_header; ?>" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:<?php echo $wpflybox_facebook_height; ?>px;" allowTransparency="true"></iframe></th><th valign="top"><?php if ($wpflybox_usecustombutton == "true"){?><a class="wpflybox_button" href="#"><img src="<?php echo $wpflybox_custombuttonloc;?>facebook.png" height="30"></a><?php }else{?><a href="#"><div style="margin-left:0px; margin-top:0px; width:32px; height:101px; background-position:0px -303px; background-image:url('<?php echo $wpflybox_sprite_url; ?>');padding:0px;"> </div></a><?php }?></th></tr></table></div></div>
        <?php
        }
    if ($wpflybox_tabs[$i]=="twitter")
        {
        ?>
        <div class="wpfb-twitter" id="wpfb-twitter"><div class="wpfb-twitter-transition"><table class="wpflyboxtable"><tr style="background:transparent"><th style="background-color:#ffffff; border: 2px solid #6CC5FF; width:230px; overflow:hidden;padding:0px;">
        <?php
        $twitteroptions = array('username' => $wpflybox_twitter ,'total' => $wpflybox_twitter_count, 'show_followers' => $wpflybox_twitter_showfollowers, 'border-color' => '#AAA','font-color' => '#3B5998','bordertop-color' => '#315C99','bg-color' => 'transparent', 'link_followers' => $wpflybox_twitter_link, 'width' => 220, 'tweetto' => $wpflybox_twitter_tweetto);
        show_twitter($twitteroptions);
        ?>
        
        <th valign="top"><?php if ($wpflybox_usecustombutton == "true"){?><a class="wpflybox_button" href="#"><img src="<?php echo $wpflybox_custombuttonloc;?>twitter.png" height="30"></a><?php }else{?><a href="#"><div style="margin-left:0px; margin-top:0px; width:32px; height:101px; background-position:0px -606px; background-image:url('<?php echo $wpflybox_sprite_url; ?>');padding:0px;"> </div></a><?php }?></th></tr></table></div></div>
        <?php
        }
    if ($wpflybox_tabs[$i]=="googleplus")
        {
        if (get_option(wpflybox_google_type)== 'profile')
            {
            ?>    
            <div class="wpfb-googleplus" id="wpfb-googleplus"><div class="wpfb-googleplus-transition"><table class="wpflyboxtable"><tr style="background:transparent"><th style="background-color:#ffffff; border: 2px solid #006ec9;width:325px; overflow:hidden;padding:0px;"><iframe src="http://www.google.com/s2/u/0/widgets/ProfileCard?uid=<?php echo $wpflybox_google; ?>" scrolling="no"></iframe></th><th valign="top" style="padding:0px;background:none;border:0px"><?php if ($wpflybox_usecustombutton == "true"){?><a class="wpflybox_button" href="#"><img src="<?php echo $wpflybox_custombuttonloc;?>googleplus.png" height="30"></a><?php }else{?><a href="#"><div style="margin-left:0px; margin-top:0px; width:32px; height:101px; background-position:0px -404px; background-image:url('<?php echo $wpflybox_sprite_url; ?>');padding:0px;"> </div></a><?php }?></th></tr></table></div></div>
            <?php
            } else if (get_option(wpflybox_google_type)== 'page')
            {
            ?>    
            <div class="wpfb-googleplus" id="wpfb-googleplus"><div class="wpfb-googleplus-transition"><table class="wpflyboxtable"><tr style="background:transparent"><th style="background-color:#ffffff; border: 2px solid #006ec9;width:325px; overflow:hidden;padding:0px;"><script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script><div class="g-plus" data-href="https://plus.google.com/<?php echo $wpflybox_google; ?>?rel=publisher"></div></th><th valign="top"><?php if ($wpflybox_usecustombutton == "true"){?><a class="wpflybox_button" href="#"><img src="<?php echo $wpflybox_custombuttonloc;?>googleplus.png" height="30"></a><?php }else{?><a href="#"><div style="margin-left:0px; margin-top:0px; width:32px; height:101px; background-position:0px -404x; background-image:url('<?php echo $wpflybox_sprite_url; ?>');padding:0px;"> </div></a><?php }?></th></tr></table></div></div> 
            <?php    
            }   
        }
    if ($wpflybox_tabs[$i]=="youtube")
        {
        ?>
        <div class="wpfb-youtube" id="wpfb-youtube"><div class="wpfb-youtube-transition"><table class="wpflyboxtable"><tr style="background:transparent"><th style="background-color:#fff; border: 2px solid #ff0000; width:300px; height;105px; overflow:hidden;padding:0px;"><iframe src=http://www.youtube.com/subscribe_widget?p=<?php echo $wpflybox_youtube; ?> style="height: 105px; width: 300px; border: 0;" scrolling="no" frameBorder="0"></iframe></th><th valign="top"><?php if ($wpflybox_usecustombutton == "true"){?><a class="wpflybox_button" href="#"><img src="<?php echo $wpflybox_custombuttonloc;?>youtube.png" height="30"></a><?php }else{?><a href="#"><div style="margin-left:0px; margin-top:0px; width:32px; height:101px; background-position:0px -202px; background-image:url('<?php echo $wpflybox_sprite_url; ?>');padding:0px;"> </div></a><?php }?></th></tr></table></div></div>
        <?php    
        }
    if ($wpflybox_tabs[$i]=="subscription")
        {
        ?>
        <div class="wpfb-subscribe" id="wpfb-subscribe"><div class="wpfb-subscribe-transition"><table class="wpflyboxtable"><tr style="background:transparent"><th style="background-color:#fff; border: 2px solid #5b5b5b; width:290px; height:97px; overflow:hidden;padding:0px;"><center><p style="color:#F66303;margin-right:10px;margin-left:10px;width:270px;font-size:14px;">Subscribe to Receive E-Mail Updates:</p> <form action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=<?php echo $wpflybox_feedburner; ?>', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true"><input style="padding:2px;" gtbfieldid="10" class="enteryouremail" name="email" value="Enter Your E-Mail Here..." onblur="if (this.value == &#39;&#39;) {this.value = &#39;Enter Your E-Mail Here...&#39;;}" onfocus="if (this.value == &#39;Enter Your E-Mail Here...&#39;) {this.value = &#39;&#39;;}" type="text" /><input value="<?php echo $wpflybox_feedburner; ?>" name="uri" type="hidden" /><input style="padding:2px;" value="Submit" class="submitbutton" type="submit" /></form></center></th><th valign="top"><?php if ($wpflybox_usecustombutton == "true"){?><a class="wpflybox_button" href="#"><img src="<?php echo $wpflybox_custombuttonloc;?>subscription.png" height="30"></a><?php }else{?><a href="#"><div style="margin-left:0px; margin-top:0px; width:32px; height:101px; background-position:0px 0px; background-image:url('<?php echo $wpflybox_sprite_url; ?>');padding:0px;"> </div></a><?php }?></th></tr></table></div></div>
        <?php
        }    
    if ($wpflybox_tabs[$i]=="pinterest")
        {
        ?>
        <div class="wpfb-pinterest" id="wpfb-pinterest"><div class="wpfb-pinterest-transition"><table class="wpflyboxtable"><tr style="background:transparent"><th style="background-color:#fff; border: 2px solid #f81f22; width:254px; overflow:hidden;padding:0px;vertical-align:middle;">
        <div align="center"><a href="http://pinterest.com/<?php echo $wpflybox_pinterest; ?>" target="_blank"><img src="<?php echo $wpflybox_pinterest_button_url; ?>" title="Pinterest" width="250" height="60" border="0" /></a></div>
        </th><th valign="top"><?php if ($wpflybox_usecustombutton == "true"){?><a class="wpflybox_button" href="#"><img src="<?php echo $wpflybox_custombuttonloc;?>pinterest.png" height="30"></a><?php }else{?><a href="#"><div style="margin-left:0px; margin-top:0px; width:32px; height:101px; background-position:0px -101px; background-image:url('<?php echo $wpflybox_sprite_url; ?>');padding:0px;"> </div></a><?php }?></th></tr></table></div></div>
        <?php
        }    
    if ($wpflybox_tabs[$i]=="linkedin")
        {
        ?>
        <div class="wpfb-linkedin" id="wpfb-linkedin"><div class="wpfb-linkedin-transition"><table class="wpflyboxtable"><tr style="background:transparent"><th style="background-color:#fff; border: 2px solid #65b2d0; width:364px; height:159px; overflow:hidden;padding:0px;">
        <script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
        <?php
        if ($wpflybox_linkedin_type=="member"){ ?>
        <script type="IN/MemberProfile" data-id="<?php echo $wpflybox_linkedin; ?>" data-format="inline" data-related="false" data-width="364"></script>
        <?php } else if ($wpflybox_linkedin_type=="company") { ?>
        <script type="IN/CompanyProfile" data-id="<?php echo $wpflybox_linkedin; ?>" data-format="inline" data-related="false" data-width="364"></script>
        <?php } ?>
        </th>
        <th valign="top"><?php if ($wpflybox_usecustombutton == "true"){?><a class="wpflybox_button" href="#"><img src="<?php echo $wpflybox_custombuttonloc;?>linkedin.png" height="30"></a><?php }else{?><a href="#"><div style="margin-left:0px; margin-top:0px; width:32px; height:101px; background-position:0px -505px; background-image:url('<?php echo $wpflybox_sprite_url; ?>');padding:0px;"> </div></a><?php }?></th></tr></table></div></div>
        <?php
        }
        
    if ($wpflybox_tabs[$i]=="contact")
        {
        ?>
        <div class="wpfb-contact" id="wpfb-contact"><div class="wpfb-contact-transition"><table class="wpflyboxtable"><tr style="background:transparent"><th style="background-color:#fff; border: 2px solid #2653a1;width:280px; overflow:hidden;padding:0px;">
        <center><b>Contact Form:</b><br>
        <form style="padding:5px;" action="<?php echo plugins_url(); ?>/wp-flybox/contact.php";" method="post" target="popupwindow" onsubmit="window.open('<?php echo plugins_url(); ?>/wp-flybox/contact.php', 'popupwindow', 'scrollbars=no,width=300,height=300');return true">
        <p>Your Name: <input style="padding:1px;" gtbfieldid="10" class="enteryourname" name="name" id="name" type="text" /></p>
        <p>Your Email: <input style="padding:1px;" gtbfieldid="10" class="enteryouremail" name="email" id="email" type="text" /></p>
        <p><textarea rows="2" cols="30" class="enteryourmessage" name="message" id="message">Enter Your Message Here...</textarea></p>
          <?php
          if ($wpflybox_captcha=="true"){ 
          $wpflybox_code= rand(1000,99999);
          ?>
        <input value="<?php echo $wpflybox_code; ?>" name="hiddencode" id="hiddencode" type="hidden" />
        <p><img src="<?php echo plugins_url(); ?>/wp-flybox/static/securityimage/security-image.php?width=200&code=<?php echo $wpflybox_code; ?>" width="200" height="40" alt="Verification Image" /></p>
        <p>Enter number from above:<br /><input style="padding:1px;" gtbfieldid="10" class="entercaptcha" name ="security_code" id="security_code" type="text" /></p>
          <?php } ?> 
        <input value="<?php echo $wpflybox_contactencrypted; ?>" name="sendtoemail" id="sendtoemail" type="hidden" />      
        <p><input style="padding:2px;" value="Submit" class="submitbutton" type="submit" /></p></form></center>
        </th>
        <th valign="top"><?php if ($wpflybox_usecustombutton == "true"){?><a class="wpflybox_button" href="#"><img src="<?php echo $wpflybox_custombuttonloc;?>contact.png" height="30"></a><?php }else{?><a href="#"><div style="margin-left:0px; margin-top:0px; width:32px; height:101px; background-position:0px -<?php echo $wpflybox_contactwhopixel; ?>px; background-image:url('<?php echo $wpflybox_sprite_url; ?>');padding:0px;"> </div></a><?php }?></th></tr></table></div></div>
        <?php         
        }
        
if ($wpflybox_tabs[$i]=="flickr")
        {
        ?>
        <div class="wpfb-flickr" id="wpfb-flickr"><div class="wpfb-flickr-transition"><table class="wpflyboxtable"><tr style="background:transparent"><th style="background-color:#fff; border: 2px solid #0063DC; overflow:hidden;padding:0px;">
        <iframe style="background-color:#ffffff; border-color:#ffffff; border:none;" width="113" height="151" frameborder="0" scrolling="no" src="http://www.flickr.com/apps/badge/badge_iframe.gne?zg_bg_color=ffffff&zg_person_id=<?php echo $wpflybox_flickr; ?>&zg_tags=<?php echo $wpflybox_flickr_tag; ?>&zg_tag_mode=any" title="Flickr Badge"></iframe>
        </th><th valign="top"><?php if ($wpflybox_usecustombutton == "true"){?><a class="wpflybox_button" href="#"><img src="<?php echo $wpflybox_custombuttonloc;?>flickr.png" height="30"></a><?php }else{?><a href="#"><div style="margin-left:0px; margin-top:0px; width:32px; height:101px; background-position:0px -808px; background-image:url('<?php echo $wpflybox_sprite_url; ?>');padding:0px;"> </div></a><?php }?></th></tr></table></div></div>
        <?php        
        }
        
if ($wpflybox_tabs[$i]=="deviant")    
        {
        ?>
        <div class="wpfb-deviant" id="wpfb-deviant"><div class="wpfb-deviant-transition"><table class="wpflyboxtable"><tr style="background:transparent"><th style="background-color:#fff; border: 2px solid #506256; overflow:hidden;padding:0px;height:<?php echo $wpflybox_deviant_frame_height; ?>px;width:<?php echo $wpflybox_deviant_frame_width; ?>px;">
        <?php
        $deviantoptions = array('username' => $wpflybox_deviant_username, 'limit' => $wpflybox_deviant_limit, 'max_width' => $wpflybox_deviant_max_width, 'max_height' => $wpflybox_deviant_max_height, 'columns' => $wpflybox_deviant_columns);
        show_deviantart($deviantoptions);
        ?>
        </th><th valign="top"><?php if ($wpflybox_usecustombutton == "true"){?><a class="wpflybox_button" href="#"><img src="<?php echo $wpflybox_custombuttonloc;?>deviant.png" height="30"></a><?php }else{?><a href="#"><div style="margin-left:0px; margin-top:0px; width:32px; height:101px; background-position:0px -909px; background-image:url('<?php echo $wpflybox_sprite_url; ?>');padding:0px;"> </div></a><?php }?></th></tr></table></div></div>
        <?php        
        }
        
if ($wpflybox_tabs[$i]=="instagram")
        {
        ?>
        <div class="wpfb-instagram" id="wpfb-instagram"><div class="wpfb-instagram-transition"><table class="wpflyboxtable"><tr style="background:transparent"><th style="background-color:#fff; border: 2px solid #86513e;width:196px; overflow:hidden;padding:0px;">
        <?php
        echo '<div style="width:196px;text-align: center;overflow:auto;">';
        if ($wpflybox_instagram_header=='true')
        {
          $wpflybox_instagram_jsonfile = wp_remote_retrieve_body(wp_remote_get('https://api.instagram.com/v1/users/'.$wpflybox_instagram_id.'/?access_token='.$wpflybox_instagram_token));
          $wpflybox_instagram_json = json_decode($wpflybox_instagram_jsonfile);
          echo '<table border="0" cellpadding="2" class="wpflyboxtable">';
          echo '<tr><td><img src="'.$wpflybox_instagram_json->data->profile_picture.'" height="40" width="40" title="'.$wpflybox_instagram_json->data->username.'"></td>';
          echo '<td align="center"><div style="font-weight:bold;font-size:16px;">'.$wpflybox_instagram_json->data->counts->media.'</div><div style="font-size:10px;">&nbsp;Photos</div></td>';
          echo '<td align="center"><div style="font-weight:bold;font-size:16px;">'.$wpflybox_instagram_json->data->counts->followed_by.'</div><div style="font-size:10px;">&nbsp;Followers</div></td>';
          echo '<td align="center"><div style="font-weight:bold;font-size:16px;">'.$wpflybox_instagram_json->data->counts->follows.'</div><div style="font-size:10px;">&nbsp;Following</div></td></tr>';
          echo '</table>';
        }
        $wpflybox_instagram_jsonfile = wp_remote_retrieve_body(wp_remote_get('https://api.instagram.com/v1/users/'.$wpflybox_instagram_id.'/media/recent/?access_token='.$wpflybox_instagram_token));
        $wpflybox_instagram_json = json_decode($wpflybox_instagram_jsonfile);
        $m=0;
          foreach ($wpflybox_instagram_json->data as $entry) {
            echo '<a href="'.$entry->link.'" target="_blank"><img src="'.$entry->images->thumbnail->url.'" height="50" width="50" style="padding:1px;" title="'.$entry->caption->text.'"></a>';
            if (++$m == $wpflybox_instagram_max) break;
          }
        echo '</div>';
        ?>
        </th>
        <th valign="top"><?php if ($wpflybox_usecustombutton == "true"){?><a class="wpflybox_button" href="#"><img src="<?php echo $wpflybox_custombuttonloc;?>instagram.png" height="30"></a><?php }else{?><a href="#"><div style="margin-left:0px; margin-top:0px; width:32px; height:101px; background-position:0px -1010px; background-image:url('<?php echo $wpflybox_sprite_url; ?>');padding:0px;"> </div></a><?php }?></th></tr></table></div></div>
        <?php        
        }

if ($wpflybox_tabs[$i]=="vimeo")
        {
        ?>
        <div class="wpfb-vimeo" id="wpfb-vimeo"><div class="wpfb-vimeo-transition"><table class="wpflyboxtable"><tr style="background:transparent"><th style="background-color:#fff; border: 2px solid #0989ab;width:220px; overflow:hidden;padding:0px;">
        <?php
        $vimeooptions = array('username' => $wpflybox_vimeo_username, 'total' => $wpflybox_vimeo_total);
        show_vimeo($vimeooptions);
        ?>
        </th>
        <th valign="top"><?php if ($wpflybox_usecustombutton == "true"){?><a class="wpflybox_button" href="#"><img src="<?php echo $wpflybox_custombuttonloc;?>vimeo.png" height="30"></a><?php }else{?><a href="#"><div style="margin-left:0px; margin-top:0px; width:32px; height:101px; background-position:0px -1212px; background-image:url('<?php echo $wpflybox_sprite_url; ?>');padding:0px;"> </div></a><?php }?></th></tr></table></div></div>
        <?php        
        }        
                                       
   
    $i=$i+1;    
    }
?>






<?php 
} else if (get_option(wpflybox_side)=="right"){

if ($wpflybox_isie>0){
if (get_option(wpflybox_jquery)=="on"){
?>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js' type='text/javascript'></script>
<?php 
}
?>
<script type='text/javascript'> 
jQuery(document).ready (
function(){jQuery("#wpfb-facebook").hover(function(){ jQuery(this).stop(true,false).animate({right:  0}, 500); },
function(){ jQuery("#wpfb-facebook").stop(true,false).animate({right: -328}, 500); });    
jQuery("#wpfb-twitter").hover(function(){ jQuery(this).stop(true,false).animate({right:  0}, 500); },
function(){ jQuery("#wpfb-twitter").stop(true,false).animate({right: -266}, 500); });     
jQuery("#wpfb-googleplus").hover(function(){ jQuery(this).stop(true,false).animate({right:  0}, 500); },
function(){ jQuery("#wpfb-googleplus").stop(true,false).animate({right: -361}, 500); });    
jQuery("#wpfb-youtube").hover(function(){ jQuery(this).stop(true,false).animate({right:  0}, 500); },
function(){ jQuery("#wpfb-youtube").stop(true,false).animate({right: -336}, 500); });  
jQuery("#wpfb-subscribe").hover(function(){ jQuery(this).stop(true,false).animate({right:  0}, 500); },
function(){ jQuery("#wpfb-subscribe").stop(true,false).animate({right: -326}, 500); });
jQuery("#wpfb-pinterest").hover(function(){ jQuery(this).stop(true,false).animate({right:  0}, 500); },
function(){ jQuery("#wpfb-pinterest").stop(true,false).animate({right: -290}, 500); }); 
jQuery("#wpfb-linkedin").hover(function(){ jQuery(this).stop(true,false).animate({right:  0}, 500); },
function(){ jQuery("#wpfb-linkedin").stop(true,false).animate({right: -400}, 500); }); 
jQuery("#wpfb-contact").hover(function(){ jQuery(this).stop(true,false).animate({right:  0}, 500); },
function(){ jQuery("#wpfb-contact").stop(true,false).animate({right: -316}, 500); });
jQuery("#wpfb-flickr").hover(function(){ jQuery(this).stop(true,false).animate({right:  0}, 500); },
function(){ jQuery("#wpfb-flickr").stop(true,false).animate({right: -149}, 500); });
jQuery("#wpfb-deviant").hover(function(){ jQuery(this).stop(true,false).animate({right:  0}, 500); },
function(){ jQuery("#wpfb-deviant").stop(true,false).animate({right: <?php echo $wpflybox_deviant_left; ?>}, 500); }); 
jQuery("#wpfb-instagram").hover(function(){ jQuery(this).stop(true,false).animate({right:  0}, 500); },
function(){ jQuery("#wpfb-instagram").stop(true,false).animate({right: -232}, 500); });
jQuery("#wpfb-vimeo").hover(function(){ jQuery(this).stop(true,false).animate({right:  0}, 500); },
function(){ jQuery("#wpfb-vimeo").stop(true,false).animate({right: -256}, 500); });    
});
</script>
<?php
}

$wpflybox_sprite_url=plugins_url()."/wp-flybox/static/FlyBoxSpriteRight.png";
$wpflybox_pinterest_button_url=plugins_url()."/wp-flybox/static/pinterest-button.png";
?>
<style type="text/css">
table.wpflyboxtable, .wpflyboxtable tbody, .wpflyboxtable th, .wpflyboxtable tr, .wpflyboxtable td, table.wpflyboxtable th, table.wpflyboxtable tr:hover, table.wpflyboxtable tr{margin: 0;padding: 0;border: 0;outline: 0;font-size: 100%;background: transparent;vertical-align:top;display: table-cell;font-weight: normal;text-align: center;border-spacing:0px;}
<?php
if ($wpflybox_usecustombutton == "true")
  {
  ?>
  .wpflybox_button {
   border-top: 1px solid #<?php echo $wpflybox_bgborder;?>;
   border-left: 1px solid #<?php echo $wpflybox_bgborder;?>;
   border-bottom: 1px solid #<?php echo $wpflybox_bgborder;?>;
   background: #000000;
   background: -webkit-gradient(linear, right top, left top, from(#<?php echo $wpflybox_bgtopgradient;?>), to(#<?php echo $wpflybox_bgbottomgradient;?>));
   background: -webkit-linear-gradient(right, #<?php echo $wpflybox_bgtopgradient;?>, #<?php echo $wpflybox_bgbottomgradient;?>);
   background: -moz-linear-gradient(right, #<?php echo $wpflybox_bgtopgradient;?>, #<?php echo $wpflybox_bgbottomgradient;?>);
   background: -ms-linear-gradient(right, #<?php echo $wpflybox_bgtopgradient;?>, #<?php echo $wpflybox_bgbottomgradient;?>);
   background: -o-linear-gradient(right, #<?php echo $wpflybox_bgtopgradient;?>, #<?php echo $wpflybox_bgbottomgradient;?>);
   display:block;
   height:32px;
   width: 32px;
   margin: 0px;
   padding: 0px;
   -webkit-border-radius: 9px 0px 0px 9px;
   -moz-border-radius: 9px 0px 0px 9px;
   border-radius: 9px 0px 0px 9px;
   color: #ffffff;
   font-size: 10px;
   font-family: Georgia, serif;
   text-decoration: none;
   vertical-align: middle;
   z-index:800;
   }
  .wpflybox_button img{
   padding:0px;
   }
   .wpflybox_button img:hover {
   -webkit-border-radius: 9px 0px 0px 9px;
   -moz-border-radius: 9px 0px 0px 9px;
   border-radius: 9px 0px 0px 9px;
   padding:0px;   
   border-bottom:0px hidden;
   background: #000000;
   background: -webkit-gradient(linear, right top, left top, from(#<?php echo $wpflybox_bgtopgradient;?>), to(#<?php echo $wpflybox_bgbottomgradient;?>));
   background: -webkit-linear-gradient(right, #<?php echo $wpflybox_bgtopgradient;?>, #<?php echo $wpflybox_bgbottomgradient;?>);
   background: -moz-linear-gradient(right, #<?php echo $wpflybox_bgtopgradient;?>, #<?php echo $wpflybox_bgbottomgradient;?>);
   background: -ms-linear-gradient(right, #<?php echo $wpflybox_bgtopgradient;?>, #<?php echo $wpflybox_bgbottomgradient;?>);
   background: -o-linear-gradient(right, #<?php echo $wpflybox_bgtopgradient;?>, #<?php echo $wpflybox_bgbottomgradient;?>);
   color: #000000;
   }
   
   <?php
  }
$i=1;
while ($i <= $wpflybox_count)
    {
    if ($wpflybox_tabs[$i]=="facebook")
        {
        echo 'div.wpfb-facebook {width:360px;top:'.$wpflybox_pos[$i].';right:-328px;position:fixed;z-index:900;direction:ltr;}';
        echo 'div.wpfb-facebook div.wpfb-facebook-transition {-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        echo 'div.wpfb-facebook div.wpfb-facebook-transition iframe {border:0px;overflow:hidden;position:static;height:260px;}';
        if (!$wpflybox_isie){echo 'div.wpfb-facebook:hover div.wpfb-facebook-transition {margin-left: -328px;}';}  
        }
    if ($wpflybox_tabs[$i]=="twitter")
        {
        echo 'div.wpfb-twitter {width:298px;top:'.$wpflybox_pos[$i].';right:-266px;position:fixed;z-index:900;direction:ltr;}';
        echo 'div.wpfb-twitter div.wpfb-twitter-transition {-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        if (!$wpflybox_isie){echo 'div.wpfb-twitter:hover div.wpfb-twitter-transition {margin-left: -266px;}';}  
        }
    if ($wpflybox_tabs[$i]=="googleplus")
        {
        echo 'div.wpfb-googleplus {width:393px;top:'.$wpflybox_pos[$i].';right:-361px;position:fixed;z-index:900;direction:ltr;}';
        echo 'div.wpfb-googleplus div.wpfb-googleplus-transition {-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        if (!$wpflybox_isie){echo 'div.wpfb-googleplus:hover div.wpfb-googleplus-transition {margin-left: -361px;}';}
        echo 'div.wpfb-googleplus div.wpfb-googleplus-transition iframe {border:0px;overflow:hidden;position:static;}';
        }
    if ($wpflybox_tabs[$i]=="youtube")
        {        
        echo 'div.wpfb-youtube {width:368px;height:110px;top:'.$wpflybox_pos[$i].';right:-336px;position:fixed;z-index:900;direction:ltr;}';
        echo 'div.wpfb-youtube div.wpfb-youtube-transition {-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        if (!$wpflybox_isie){echo 'div.wpfb-youtube:hover div.wpfb-youtube-transition {margin-left: -336px;}';}
        }
    if ($wpflybox_tabs[$i]=="subscription")
        {
        echo 'div.wpfb-subscribe {width:358px;height:101px;top:'.$wpflybox_pos[$i].';right:-326px;position:fixed;z-index:900;direction:ltr;}';
        echo 'div.wpfb-subscribe div.wpfb-subscribe-transition {-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        if (!$wpflybox_isie){echo 'div.wpfb-subscribe:hover div.wpfb-subscribe-transition {margin-left: -326px;}';}   
        }    
    if ($wpflybox_tabs[$i]=="pinterest")
        {     
        echo 'div.wpfb-pinterest {width:322px;height:101px;top:'.$wpflybox_pos[$i].';right:-290px;position:fixed;z-index:900;direction:ltr;}';
        echo 'div.wpfb-pinterest div.wpfb-pinterest-transition {-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        if (!$wpflybox_isie){echo 'div.wpfb-pinterest:hover div.wpfb-pinterest-transition {margin-left: -290px;}';}
        }
    if ($wpflybox_tabs[$i]=="linkedin")
        {         
        echo 'div.wpfb-linkedin {width:432px;height:168px;top:'.$wpflybox_pos[$i].';right:-400px;position:fixed;z-index:900;direction:ltr;}';
        echo 'div.wpfb-linkedin div.wpfb-linkedin-transition {-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        if (!$wpflybox_isie){echo 'div.wpfb-linkedin:hover div.wpfb-linkedin-transition {margin-left: -400px;}';}
        echo 'div.wpfb-linkedin div.wpfb-facebook-transition iframe {border:0px;overflow:hidden;position:static;height:260px;}';
        }
    if ($wpflybox_tabs[$i]=="contact")
        {
        echo 'div.wpfb-contact {width:348px;height:300px;top:'.$wpflybox_pos[$i].';right:-316px;position:fixed;z-index:900;direction:ltr;}';
        echo 'div.wpfb-contact div.wpfb-contact-transition {margin-left:0px;-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        echo 'div.wpfb-contact div.wpfb-contact-transition iframe {border:0px;overflow:hidden;position:static;height:260px;}';
        if (!$wpflybox_isie){echo 'div.wpfb-contact:hover div.wpfb-contact-transition {margin-left: -316px;}';}                 
        }      
    if ($wpflybox_tabs[$i]=="flickr")
        {
        echo 'div.wpfb-flickr {width:181px;height:155px;top:'.$wpflybox_pos[$i].';right:-149px;position:fixed;z-index:900;direction:ltr;}';
        echo 'div.wpfb-flickr div.wpfb-flickr-transition {margin-left:0px;-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        echo 'div.wpfb-flickr div.wpfb-flickr-transition iframe {border:0px;overflow:hidden;position:static;}';
        if (!$wpflybox_isie){echo 'div.wpfb-flickr:hover div.wpfb-flickr-transition {margin-left: -149px;}';}               
        }
    if ($wpflybox_tabs[$i]=="deviant")
        {
        echo 'div.wpfb-deviant {width:'.$wpflybox_deviant_total_frame_width.'px;top:'.$wpflybox_pos[$i].';right:'.$wpflybox_deviant_right.'px;position:fixed;z-index:900;direction:ltr;}';
        echo 'div.wpfb-deviant div.wpfb-deviant-transition {margin-left: 0px;-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        echo 'div.wpfb-deviant div.wpfb-deviant-transition iframe {border:0px;overflow:hidden;position:static;width:'.$wpflybox_deviant_frame_width.'px}';
        if (!$wpflybox_isie){echo 'div.wpfb-deviant:hover div.wpfb-deviant-transition {margin-left:-'.$wpflybox_deviant_total_frame_width_left.'px;}';} 
        }
    if ($wpflybox_tabs[$i]=="instagram")
        {
        echo 'div.wpfb-instagram a:hover, a:hover img {border:none;}';
        echo 'div.wpfb-instagram {width:264px;top:'.$wpflybox_pos[$i].';right:-232px;position:fixed;z-index:900;direction:ltr;}';
        echo 'div.wpfb-instagram div.wpfb-instagram-transition {margin-left:0px;-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        echo 'div.wpfb-instagram div.wpfb-instagram-transition iframe {border:0px;overflow:hidden;position:static;height:260px;}';
        if (!$wpflybox_isie){echo 'div.wpfb-instagram:hover div.wpfb-instagram-transition {margin-left: -232px;}';}         
        } 
    if ($wpflybox_tabs[$i]=="vimeo")
        {
        echo 'div.wpfb-vimeo a img, img, a:hover, a:hover img {border: 0;padding: 0px}';
        echo 'div.wpfb-vimeo {width:288px;top:'.$wpflybox_pos[$i].';right:-256px;position:fixed;z-index:900;direction:ltr;}';
        echo 'div.wpfb-vimeo div.wpfb-vimeo-transition {margin-left:0px;-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        if (!$wpflybox_isie){echo 'div.wpfb-vimeo:hover div.wpfb-vimeo-transition {margin-left: -256px;}';}         
        }                                             
        
    $i=$i+1;    
    }
    
?>  
</style>



<?php
$i=1;
while ($i <= $wpflybox_count)
    {
    if ($wpflybox_tabs[$i]=="facebook")
        {
        ?>
        <div class="wpfb-facebook" id="wpfb-facebook"><div class="wpfb-facebook-transition"><table class="wpflyboxtable"><tr style="background:transparent"><th valign="top" ><?php if ($wpflybox_usecustombutton == "true"){?><a class="wpflybox_button" href="#"><img src="<?php echo $wpflybox_custombuttonloc;?>facebook.png" height="30"></a><?php }else{?><a href="#"><div style="margin-left:0px; margin-top:0px; width:32px; height:101px; background-position:0px -303px; background-image:url('<?php echo $wpflybox_sprite_url; ?>');padding:0px;"> </div></a><?php }?></th><th style="background-color:#fff; border: 2px solid #3c95d9;width:292px;overflow:hidden;padding:0px;"><iframe src="http://www.facebook.com/plugins/likebox.php?href=<?php echo $wpflybox_facebook; ?>&amp;locale=en_GB&amp;width=<?php echo $wpflybox_facebook_width; ?>&amp;height=<?php echo $wpflybox_facebook_height; ?>&amp;colorscheme=<?php echo $wpflybox_facebook_color; ?>&amp;show_faces=<?php echo $wpflybox_facebook_showfaces; ?>&amp;stream=<?php echo $wpflybox_facebook_stream; ?>&amp;header=<?php echo $wpflybox_facebook_header; ?>" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:<?php echo $wpflybox_facebook_height; ?>px;" allowTransparency="true"></iframe></th></th></tr></table></div></div>
        <?php
        }
    if ($wpflybox_tabs[$i]=="twitter")
        {
        ?>
        <div class="wpfb-twitter" id="wpfb-twitter"><div class="wpfb-twitter-transition"><table class="wpflyboxtable"><tr style="background:transparent"><th valign="top"><?php if ($wpflybox_usecustombutton == "true"){?><a class="wpflybox_button" href="#"><img src="<?php echo $wpflybox_custombuttonloc;?>twitter.png" height="30"></a><?php }else{?><a href="#"><div style="margin-left:0px; margin-top:0px; width:32px; height:101px; background-position:0px -606px; background-image:url('<?php echo $wpflybox_sprite_url; ?>');padding:0px;"> </div></a><?php }?></th><th style="background-color:#ffffff; border: 2px solid #6CC5FF; width:230px; overflow:hidden;padding:0px;">
        <?php
        $twitteroptions = array('username' => $wpflybox_twitter ,'total' => $wpflybox_twitter_count, 'show_followers' => $wpflybox_twitter_showfollowers, 'border-color' => '#AAA','font-color' => '#3B5998','bordertop-color' => '#315C99','bg-color' => 'transparent', 'link_followers' => $wpflybox_twitter_link, 'width' => 220, 'tweetto' => $wpflybox_twitter_tweetto);
        show_twitter($twitteroptions);
        ?>
        
        </tr></table></div></div>
        
        <?php
        }
    if ($wpflybox_tabs[$i]=="googleplus")
        {
        if (get_option(wpflybox_google_type)== 'profile')
            {
            ?>    
            <div class="wpfb-googleplus" id="wpfb-googleplus"><div class="wpfb-googleplus-transition"><table class="wpflyboxtable"><tr style="background:transparent"><th valign="top"><?php if ($wpflybox_usecustombutton == "true"){?><a class="wpflybox_button" href="#"><img src="<?php echo $wpflybox_custombuttonloc;?>googleplus.png" height="30"></a><?php }else{?><a href="#"><div style="margin-left:0px; margin-top:0px; width:32px; height:101px; background-position:0px -404px; background-image:url('<?php echo $wpflybox_sprite_url; ?>');padding:0px;"> </div></a><?php }?></th><th style="background-color:#ffffff; border: 2px solid #006EC9;width:325px; overflow:hidden;"><iframe src="http://www.google.com/s2/u/0/widgets/ProfileCard?uid=<?php echo $wpflybox_google; ?>" width="100%" height="125px" scrolling="no" style="border:0px;"></iframe></th></tr></table></div></div>
            <?php
            } else if (get_option(wpflybox_google_type)== 'page')
            {
            ?>    
            <div class="wpfb-googleplus" id="wpfb-googleplus"><div class="wpfb-googleplus-transition"><table class="wpflyboxtable"><tr style="background:transparent"><th valign="top"><?php if ($wpflybox_usecustombutton == "true"){?><a class="wpflybox_button" href="#"><img src="<?php echo $wpflybox_custombuttonloc;?>googleplus.png" height="30"></a><?php }else{?><a href="#"><div style="margin-left:0px; margin-top:0px; width:32px; height:101px; background-position:0px -404px; background-image:url('<?php echo $wpflybox_sprite_url; ?>');padding:0px;"> </div></a><?php }?></th><th style="background-color:#ffffff border: 2px solid #006EC9;width:325px; overflow:hidden;"><script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script><div class="g-plus" data-href="https://plus.google.com/<?php echo $wpflybox_google; ?>?rel=publisher"></div></th></tr></table></div></div>
            <?php    
            }   
        }
    if ($wpflybox_tabs[$i]=="youtube")
        {
        ?>
        <div class="wpfb-youtube" id="wpfb-youtube"><div class="wpfb-youtube-transition"><table class="wpflyboxtable"><tr style="background:transparent"><th valign="top"><?php if ($wpflybox_usecustombutton == "true"){?><a class="wpflybox_button" href="#"><img src="<?php echo $wpflybox_custombuttonloc;?>youtube.png" height="30"></a><?php }else{?><a href="#"><div style="margin-left:0px; margin-top:0px; width:32px; height:101px; background-position:0px -202px; background-image:url('<?php echo $wpflybox_sprite_url; ?>');padding:0px;"> </div></a><?php }?></th><th style="background-color:#fff; border: 2px solid #ff0000; width:300px; height;105px; overflow:hidden;"><iframe src=http://www.youtube.com/subscribe_widget?p=<?php echo $wpflybox_youtube; ?> style="height: 105px; width: 300px; border: 0;" scrolling="no" frameBorder="0"></iframe></th></tr></table></div></div>
        <?php    
        }
    if ($wpflybox_tabs[$i]=="subscription")
        {
        ?>
        <div class="wpfb-subscribe" id="wpfb-subscribe"><div class="wpfb-subscribe-transition"><table class="wpflyboxtable"><tr style="background:transparent"><th valign="top"><?php if ($wpflybox_usecustombutton == "true"){?><a class="wpflybox_button" href="#"><img src="<?php echo $wpflybox_custombuttonloc;?>subscription.png" height="30"></a><?php }else{?><a href="#"><div style="margin-left:0px; margin-top:0px; width:32px; height:101px; background-position:0px 0px; background-image:url('<?php echo $wpflybox_sprite_url; ?>');padding:0px;"> </div></a><?php }?></th><th style="background-color:#fff; border: 2px solid #5b5b5b; width:290px; height:97px; overflow:hidden;"><center><p style="color:#F66303;margin-right:10px;margin-left:10px;width:270px;font-size:14px;">Subscribe to Receive E-Mail Updates:</p> <form action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=<?php echo $wpflybox_feedburner; ?>', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true"><input style="padding:2px;" gtbfieldid="10" class="enteryouremail" name="email" value="Enter Your E-Mail Here..." onblur="if (this.value == &#39;&#39;) {this.value = &#39;Enter Your E-Mail Here...&#39;;}" onfocus="if (this.value == &#39;Enter Your E-Mail Here...&#39;) {this.value = &#39;&#39;;}" type="text" /><input value="<?php echo $wpflybox_feedburner; ?>" name="uri" type="hidden" /><input style="padding:2px; value="Submit" class="submitbutton" type="submit" /></form></center></th></tr></table></div></div>
        <?php
        }    
    if ($wpflybox_tabs[$i]=="pinterest")
        {
        ?>
        <div class="wpfb-pinterest" id="wpfb-pinterest"><div class="wpfb-pinterest-transition"><table class="wpflyboxtable"><tr style="background:transparent"><th valign="top"><?php if ($wpflybox_usecustombutton == "true"){?><a class="wpflybox_button" href="#"><img src="<?php echo $wpflybox_custombuttonloc;?>pinterest.png" height="30"></a><?php }else{?><a href="#"><div style="margin-left:0px; margin-top:0px; width:32px; height:101px; background-position:0px -101px; background-image:url('<?php echo $wpflybox_sprite_url; ?>');padding:0px;"> </div></a><?php }?></th><th style="background-color:#fff; border: 2px solid #f81f22; width:254px; overflow:hidden;vertical-align:middle;">
        <div align="center"><a href="http://pinterest.com/<?php echo $wpflybox_pinterest; ?>" target="_blank"><img src="<?php echo $wpflybox_pinterest_button_url; ?>" title="Pinterest" width="250" height="60" border="0" /></a></div>
        </th></tr></table></div></div>
        <?php
        }    
    if ($wpflybox_tabs[$i]=="linkedin")
        {
        ?>
        <div class="wpfb-linkedin" id="wpfb-linkedin"><div class="wpfb-linkedin-transition"><table class="wpflyboxtable"><tr style="background:transparent"><th valign="top"><?php if ($wpflybox_usecustombutton == "true"){?><a class="wpflybox_button" href="#"><img src="<?php echo $wpflybox_custombuttonloc;?>linkedin.png" height="30"></a><?php }else{?><a href="#"><div style="margin-left:0px; margin-top:0px; width:32px; height:101px; background-position:0px -505px; background-image:url('<?php echo $wpflybox_sprite_url; ?>');padding:0px;"> </div></a><?php }?></th><th style="background-color:#fff; border: 2px solid #4875B4; width:364px; height:159px; overflow:hidden;">
        <script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
        <?php
        if ($wpflybox_linkedin_type=="member"){ ?>
        <script type="IN/MemberProfile" data-id="<?php echo $wpflybox_linkedin; ?>" data-format="inline" data-related="false" data-width="364"></script>
        <?php } else if ($wpflybox_linkedin_type=="company") { ?>
        <script type="IN/CompanyProfile" data-id="<?php echo $wpflybox_linkedin; ?>" data-format="inline" data-related="false" data-width="364"></script>
        <?php } ?>
        </th></tr></table></div></div>
        <?php
        }
        
    if ($wpflybox_tabs[$i]=="contact")
        {
        ?>
        <div class="wpfb-contact" id="wpfb-contact"><div class="wpfb-contact-transition"><table class="wpflyboxtable"><tr style="background:transparent">
        <th valign="top"><?php if ($wpflybox_usecustombutton == "true"){?><a class="wpflybox_button" href="#"><img src="<?php echo $wpflybox_custombuttonloc;?>contact.png" height="30"></a><?php }else{?><a href="#"><div style="margin-left:0px; margin-top:0px; width:32px; height:101px; background-position:0px -<?php echo $wpflybox_contactwhopixel; ?>px; background-image:url('<?php echo $wpflybox_sprite_url; ?>');padding:0px;"> </div></a><?php }?></th>
        <th style="background-color:#fff; border: 2px solid #2653a1;width:280px; overflow:hidden;padding:0px;">
        <center><b>Contact Form:</b><br />
        <form style="padding:5px;" action="<?php echo plugins_url(); ?>/wp-flybox/contact.php";" method="post" target="popupwindow" onsubmit="window.open('<?php echo plugins_url(); ?>/wp-flybox/contact.php', 'popupwindow', 'scrollbars=no,width=300,height=300');return true">
        <p>Your Name: <input style="padding:1px;" gtbfieldid="10" class="enteryourname" name="name" id="name" type="text" /></p>
        <p>Your Email: <input style="padding:1px;" gtbfieldid="10" class="enteryouremail" name="email" id="email" type="text" /></p>
        <p><textarea rows="2" cols="30" class="enteryourmessage" name="message" id="message">Enter Your Message Here...</textarea></p>
          <?php
          if ($wpflybox_captcha=="true"){ 
          $wpflybox_code= rand(1000,99999);
          ?>
        <input value="<?php echo $wpflybox_code; ?>" name="hiddencode" id="hiddencode" type="hidden" />
        <p><img src="<?php echo plugins_url(); ?>/wp-flybox/static/securityimage/security-image.php?width=200&code=<?php echo $wpflybox_code; ?>" width="200" height="40" alt="Verification Image" /></p>
        <p>Enter number from above:<br /><input style="padding:1px;" gtbfieldid="10" class="entercaptcha" name ="security_code" id="security_code" type="text" /></p>
          <?php } ?>
        <input value="<?php echo $wpflybox_contactencrypted; ?>" name="sendtoemail" id="sendtoemail" type="hidden" />      
        <p><input style="padding:2px;" value="Submit" class="submitbutton" type="submit" /></p></form></center>
        </th></tr></table></div></div>
        <?php         
        }

if ($wpflybox_tabs[$i]=="flickr")
        {
        ?>
        <div class="wpfb-flickr" id="wpfb-flickr"><div class="wpfb-flickr-transition"><table class="wpflyboxtable"><tr style="background:transparent">
        <th valign="top"><?php if ($wpflybox_usecustombutton == "true"){?><a class="wpflybox_button" href="#"><img src="<?php echo $wpflybox_custombuttonloc;?>flickr.png" height="30"></a><?php }else{?><a href="#"><div style="margin-left:0px; margin-top:0px; width:32px; height:101px; background-position:0px -808px; background-image:url('<?php echo $wpflybox_sprite_url; ?>');padding:0px;"> </div></a><?php }?></th>
        <th style="background-color:#fff; border: 2px solid #0063DC; overflow:hidden;padding:0px;">
        <iframe style="background-color:#ffffff; border-color:#ffffff; border:none;" width="113" height="151" frameborder="0" scrolling="no" src="http://www.flickr.com/apps/badge/badge_iframe.gne?zg_bg_color=ffffff&zg_person_id=<?php echo $wpflybox_flickr; ?>&zg_tags=<?php echo $wpflybox_flickr_tag; ?>&zg_tag_mode=any" title="Flickr Badge"></iframe>
        </th>
        </tr></table></div></div>
        <?php        
        }
        
if ($wpflybox_tabs[$i]=="deviant")
        {
        ?>
        <div class="wpfb-deviant" id="wpfb-deviant"><div class="wpfb-deviant-transition"><table class="wpflyboxtable"><tr style="background:transparent">
        <th valign="top"><?php if ($wpflybox_usecustombutton == "true"){?><a class="wpflybox_button" href="#"><img src="<?php echo $wpflybox_custombuttonloc;?>deviant.png" height="30"></a><?php }else{?><a href="#"><div style="margin-left:0px; margin-top:0px; width:32px; height:101px; background-position:0px -909px; background-image:url('<?php echo $wpflybox_sprite_url; ?>');padding:0px;"> </div></a><?php }?></th>
        <th style="background-color:#fff; border: 2px solid #506256; overflow:hidden;padding:0px;height:<?php echo $wpflybox_deviant_frame_height; ?>px;width:<?php echo $wpflybox_deviant_frame_width; ?>px;">
        <?php
        $deviantoptions = array('username' => $wpflybox_deviant_username, 'limit' => $wpflybox_deviant_limit, 'max_width' => $wpflybox_deviant_max_width, 'max_height' => $wpflybox_deviant_max_height, 'columns' => $wpflybox_deviant_columns);
        show_deviantart($deviantoptions);
        ?>
        </th>
        </tr></table></div></div>
        <?php        
        }
        
if ($wpflybox_tabs[$i]=="instagram")
        {
        ?>
        <div class="wpfb-instagram" id="wpfb-instagram"><div class="wpfb-instagram-transition"><table class="wpflyboxtable"><tr style="background:transparent">
        <th valign="top"><?php if ($wpflybox_usecustombutton == "true"){?><a class="wpflybox_button" href="#"><img src="<?php echo $wpflybox_custombuttonloc;?>instagram.png" height="30"></a><?php }else{?><a href="#"><div style="margin-left:0px; margin-top:0px; width:32px; height:101px; background-position:0px -1010px; background-image:url('<?php echo $wpflybox_sprite_url; ?>');padding:0px;"> </div></a><?php }?></th>
        <th style="background-color:#fff; border: 2px solid #86513e; width:196px; overflow:hidden;padding:0px;">
        <?php
         echo '<div style="width:196px;text-align: center;overflow:auto;">';
        if ($wpflybox_instagram_header=='true')
        {
          $wpflybox_instagram_jsonfile = wp_remote_retrieve_body(wp_remote_get('https://api.instagram.com/v1/users/'.$wpflybox_instagram_id.'/?access_token='.$wpflybox_instagram_token));
          $wpflybox_instagram_json = json_decode($wpflybox_instagram_jsonfile);       
          echo '<table border="0" cellpadding="2" class="wpflyboxtable">';
          echo '<tr><td><img src="'.$wpflybox_instagram_json->data->profile_picture.'" height="40" width="40" title="'.$wpflybox_instagram_json->data->username.'"></td>';
          echo '<td align="center"><div style="font-weight:bold;font-size:16px;">'.$wpflybox_instagram_json->data->counts->media.'</div><div style="font-size:10px;">&nbsp;Photos</div></td>';
          echo '<td align="center"><div style="font-weight:bold;font-size:16px;">'.$wpflybox_instagram_json->data->counts->followed_by.'</div><div style="font-size:10px;">&nbsp;Followers</div></td>';
          echo '<td align="center"><div style="font-weight:bold;font-size:16px;">'.$wpflybox_instagram_json->data->counts->follows.'</div><div style="font-size:10px;">&nbsp;Following</div></td></tr>';
          echo '</table>';
        }
        $wpflybox_instagram_jsonfile = wp_remote_retrieve_body(wp_remote_get('https://api.instagram.com/v1/users/'.$wpflybox_instagram_id.'/media/recent/?access_token='.$wpflybox_instagram_token));
        $wpflybox_instagram_json = json_decode($wpflybox_instagram_jsonfile);
        $m=0;
          foreach ($wpflybox_instagram_json->data as $entry) {
            echo '<a href="'.$entry->link.'" target="_blank"><img src="'.$entry->images->thumbnail->url.'" height="50" width="50" style="padding:1px;" title="'.$entry->caption->text.'"></a>';
            if (++$m == $wpflybox_instagram_max) break;
          }
        echo '</div>';
        ?>
        </th></tr></table></div></div>
        
        <?php        
        }

    if ($wpflybox_tabs[$i]=="vimeo")
        {
        ?>
        <div class="wpfb-vimeo" id="wpfb-vimeo"><div class="wpfb-vimeo-transition"><table class="wpflyboxtable"><tr style="background:transparent"><th valign="top"><?php if ($wpflybox_usecustombutton == "true"){?><a class="wpflybox_button" href="#"><img src="<?php echo $wpflybox_custombuttonloc;?>vimeo.png" height="30"></a><?php }else{?><a href="#"><div style="margin-left:0px; margin-top:0px; width:32px; height:101px; background-position:0px -1212px; background-image:url('<?php echo $wpflybox_sprite_url; ?>');padding:0px;"> </div></a><?php }?></th><th style="background-color:#ffffff; border: 2px solid #0989ab; width:220px; overflow:hidden;padding:0px;">
        <?php
        $vimeooptions = array('username' => $wpflybox_vimeo_username, 'total' => $wpflybox_vimeo_total);
        show_vimeo($vimeooptions);
        ?>
        
        </tr></table></div></div>
        
        <?php
        }                                   
                     
        
    $i=$i+1;    
    }
}//end if right
}//end mobile detection
?>




