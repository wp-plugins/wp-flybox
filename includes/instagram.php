<?php
$instagramoptions = array('id' => get_option(wpflybox_instagram_id) ,'token' => get_option(wpflybox_instagram_token), 'header' => get_option(wpflybox_instagram_header), 'max' => get_option(wpflybox_instagram_max));
$wpfb_cached='true';
function wpfb_show_instagram ($options)
{
$key = 'wpfb_i_' . $options['id'];
$you = get_transient($key);
 	
echo '<div style="width:196px;text-align: center;overflow:hidden;">';
if ($options[header]=='true')
{
  if (!$you)
  	{
  	$wpfb_cached='false';
    $wpflybox_instagram_jsonfile = wp_remote_get('https://api.instagram.com/v1/users/'.$options[id].'/?access_token='.$options[token]);
    if (is_wp_error($wpflybox_instagram_jsonfile))
		  {
		  $you = get_option($key);
      } else {
      $json = json_decode(wp_remote_retrieve_body($wpflybox_instagram_jsonfile));
      $you['profile_picture'] = $json->data->profile_picture;
      $you['username'] = $json->data->username;
      $you['mediacount'] = $json->data->counts->media;
      $you['followedby'] = $json->data->counts->followed_by;
      $you['follows'] = $json->data->counts->follows;
      }
    }

  if ($you['username']){  
  echo '<table border="0" cellpadding="2" class="wpflyboxtable">';
  echo '<tr style="padding:3px;"><td><img src="'.$you[profile_picture].'" height="40" width="40" title="'.$you[username].'"></td>';
  echo '<td align="center"><div style="font-weight:bold;font-size:16px;margin-top:4px;">'.$you[mediacount].'</div><div style="font-size:10px;">&nbsp;Photos</div></td>';
  echo '<td align="center"><div style="font-weight:bold;font-size:16px;margin-top:4px;">'.$you[followedby].'</div><div style="font-size:10px;">&nbsp;Followers</div></td>';
  echo '<td align="center"><div style="font-weight:bold;font-size:16px;margin-top:4px;">'.$you[follows].'</div><div style="font-size:10px;">&nbsp;Following</div></td></tr>';
  echo '</table>';
  } else {echo 'Invalid username or instagram servers not found';}
}

if (!$you['media'] || $wpfb_cached=='false')
  {
  $wpflybox_instagram_jsonfile = wp_remote_get('https://api.instagram.com/v1/users/'.$options[id].'/media/recent/?access_token='.$options[token]);
  if (is_wp_error($wpflybox_instagram_jsonfile))
		  {
		  echo 'Instagram Server Not Found';
		  return false;
		  } else {
      $json = json_decode(wp_remote_retrieve_body($wpflybox_instagram_jsonfile));
      for($m=0; $m <= $options['max']; $m++)
        {
        $media[$m]['link'] = (string)$json->data[$m]->link;
        $media[$m]['thumburl'] = (string)$json->data[$m]->images->thumbnail->url;
        $media[$m]['text'] = (string)$json->data[$m]->caption->text;
        }
      $you['media']=$media;  
      }
  } else {
  $media = $you['media'];
  }
  if ($you['media'][0][thumburl]){
  for($m=0; $m <= $options['max']; $m++)
  {
  echo '<a href="'.$media[$m][link].'" target="_blank"><img src="'.$media[$m][thumburl].'" height="50" width="50" style="padding:3px;" title="'.$media[$m][text].'"></a>';
  }
  } else {echo '<br>Invalid username, no pictures on account or instagram servers not found';}
  
echo '</div>';

if ($wpfb_cached=='false')
  {
  set_transient($key, $you, 60*60*3);
  update_option($key, $you);
  }

} //end function



echo '<div class="wpfb-instagram" id="wpfb-instagram">
        <div class="wpfb-instagram-transition">
          <table class="wpflyboxtable">
            <tr style="background:transparent">';
if (get_option(wpflybox_side)=="right")
  {
  echo '<th valign="top" >';
  if (get_option(wpflybox_usecustombutton) == "true")
    {
    echo '<a class="wpflybox_button" href="#"><img src="'.WP_PLUGIN_URL.'/wp-flybox/static/icons/instagram.png" height="30"></a>';
    } else {
    echo'<a href="#"><div style="margin-left:0px; margin-top:0px; width:33px; height:101px; background-position:0px -1010px; background-image:url(\''.WP_PLUGIN_URL.'/wp-flybox/static/FlyBoxSpriteRight.png\');padding:0px;"> </div></a>';
    }
    echo '</th>';
  }
      echo '<th style="background-color:#fff; border: 2px solid #86513e;width:196px;overflow:hidden;padding:0px;">';
      wpfb_show_instagram($instagramoptions);
      echo '</th>';
if (get_option(wpflybox_side)=="left")
  {
  echo '<th valign="top" >';
  if (get_option(wpflybox_usecustombutton) == "true")
    {
    echo '<a class="wpflybox_button" href="#"><img src="'.WP_PLUGIN_URL.'/wp-flybox/static/icons/instagram.png" height="30"></a>';
    } else {
    echo'<a href="#"><div style="margin-left:0px; margin-top:0px; width:33px; height:101px; background-position:0px -1010px; background-image:url(\''.WP_PLUGIN_URL.'/wp-flybox/static/FlyBoxSpriteLeft.png\');padding:0px;"> </div></a>';
    }
    echo '</th>';
  }
echo '</tr>
      </table>
      </div>
      </div>';
      
?>