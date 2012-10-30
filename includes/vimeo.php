<?php
$vimeooptions = array('username' => get_option(wpflybox_vimeo_username), 'total' => get_option(wpflybox_vimeo_total));

function wpfb_get_vimeo_data($options)
  {
  $key = 'wpfb_v_' . $options['username'];
  $you = get_transient($key);
  	if ($you !== false)
  	{
  	return $you;
  	}      
  $response = wp_remote_get("http://vimeo.com/api/v2/$options[username]/info.json");
  
  if (is_wp_error($response))
		{
		return get_option($key);
    }
  $response = wp_remote_retrieve_body($response);

  if (strstr($response, 'not found'))
    {
    return get_option($key);
    }
  $json=json_decode($response);

  if ($json->error)
    {
    return get_option($key);
    }

    $you['name'] = $json->display_name;
    $you['profile_url'] = $json->profile_url;
    $you['videos_url'] = $json->videos_url;
    $you['total_videos_uploaded'] = $json->total_videos_uploaded;
    $you['portrait_medium'] = $json->portrait_medium;
    
    if ( $options['total'] > 0)
      {
      $videosget = wp_remote_retrieve_body(wp_remote_get("http://vimeo.com/api/v2/".$options[username]."/videos.json"));
      if (strpos($videosget, 'not found')>0)
        {
        return get_option($key);
        }
      $videojson=json_decode($videosget); 
       
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
  
  set_transient($key, $you, 60*60*6);
  update_option($key, $you);    
  return $you;
  
  }

function wpfb_show_custom_vimeo($options, $you)
  {
  ?>
  
<div style="width:210px;padding:5px 5px 5px 5px; font-family:\'Lucida grande\',tahoma,verdana,arial,sans-serif;">
	<div style="color:#555;color:#555; height:55px; position:relative;">
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
  <div style="padding:0px;border-top:1px solid #3cadc9;">
		<?php for($i=0; $i < $options['total']; $i++)	:?>
		
			<span class="wpfb_vimeo_vids" style="line-height:1;padding:5px 2px 5px 2px;width:48px;height:66px;float:left;text-align:center;overflow:hidden">
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

$you = wpfb_get_vimeo_data($vimeooptions);

echo '<div class="wpfb-vimeo" id="wpfb-vimeo">
        <div class="wpfb-vimeo-transition">
          <table class="wpflyboxtable">
            <tr style="background:transparent">';
if (get_option(wpflybox_side)=="right")
  {
  echo '<th valign="top" >';
  if (get_option(wpflybox_usecustombutton) == "true")
    {
    echo '<a class="wpflybox_button" href="#"><img src="'.WP_PLUGIN_URL.'/wp-flybox/static/icons/vimeo.png" height="30"></a>';
    } else {
    echo'<a href="#"><div style="margin-left:0px; margin-top:0px; width:33px; height:101px; background-position:0px -1212px; background-image:url(\''.WP_PLUGIN_URL.'/wp-flybox/static/FlyBoxSpriteRight.png\');padding:0px;"> </div></a>';
    }
    echo '</th>';
  }
echo '<th style="background-color:#fff; border: 2px solid #0989ab;width:220px;overflow:hidden;padding:0px;">';
if($you)
  {
  wpfb_show_custom_vimeo($vimeooptions, $you);
  } else {
  echo 'Error: Invalid username or vimeo server cannot be reached.';
  }      
echo '</th>';
if (get_option(wpflybox_side)=="left")
  {
  echo '<th valign="top" >';
  if (get_option(wpflybox_usecustombutton) == "true")
    {
    echo '<a class="wpflybox_button" href="#"><img src="'.WP_PLUGIN_URL.'/wp-flybox/static/icons/vimeo.png" height="30"></a>';
    } else {
    echo'<a href="#"><div style="margin-left:0px; margin-top:0px; width:33px; height:101px; background-position:0px -1212px; background-image:url(\''.WP_PLUGIN_URL.'/wp-flybox/static/FlyBoxSpriteLeft.png\');padding:0px;"> </div></a>';
    }
    echo '</th>';
  }
echo '</tr>
      </table>
      </div>
      </div>';
      
?>

