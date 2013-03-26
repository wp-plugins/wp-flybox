<?php
$instagramoptions = array('id' => get_option(wpflybox_instagram_id) ,'token' => get_option(wpflybox_instagram_token), 'header' => get_option(wpflybox_instagram_header), 'max' => get_option(wpflybox_instagram_max));
$wpfb_cached='true';
function wpfb_show_instagram ($options)
{
$you=Array();
$key = 'wpfb_i_' . $options['id'];
$you = get_transient($key);
$you = base64_decode($you);
$you = unserialize($you);

echo '<div style="width:196px;text-align: center;overflow:hidden;">';
if ($options[header]=='true')
{
  if (!$you['username'])
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
    } else {
    //$wpfb_cached=='true';
    }

  if ($you['username']){  
  echo '<table style="padding:2px;border:none;" class="wpflyboxtable">';
  echo '<tr style="padding:3px;"><td><img src="'.$you[profile_picture].'" height="40" width="40" title="'.$you[username].'" alt="'.$you[username].'"></td>';
  echo '<td style="text-align:center"><div style="font-weight:bold;font-size:16px;margin-top:4px;">'.$you[mediacount].'</div><div style="font-size:10px;">&nbsp;Photos</div></td>';
  echo '<td style="text-align:center"><div style="font-weight:bold;font-size:16px;margin-top:4px;">'.$you[followedby].'</div><div style="font-size:10px;">&nbsp;Followers</div></td>';
  echo '<td style="text-align:center"><div style="font-weight:bold;font-size:16px;margin-top:4px;">'.$you[follows].'</div><div style="font-size:10px;">&nbsp;Following</div></td></tr>';
  echo '</table>';
  } else {echo 'Invalid username or instagram servers not found';}
}
if (!$you['media'] || $wpfb_cached=='false')
  {
  $wpfb_cached='false';
  $wpflybox_instagram_jsonfile = wp_remote_get('https://api.instagram.com/v1/users/'.$options[id].'/media/recent/?access_token='.$options[token]);
  //echo 'https://api.instagram.com/v1/users/'.$options[id].'/media/recent/?access_token='.$options[token];
  if (is_wp_error($wpflybox_instagram_jsonfile))
		  {
		  echo 'Instagram Server Not Found';
		  return false;
		  } else {
		  $json = json_decode(wp_remote_retrieve_body($wpflybox_instagram_jsonfile));
		  //var_dump($json);

      for($m=1; $m <= $options['max']; $m++)
        {
        $media[$m]['link'] = (string)$json->data[$m-1]->link;
        $media[$m]['thumburl'] = (string)$json->data[$m-1]->images->thumbnail->url;
        $media[$m]['text'] = (string)$json->data[$m-1]->caption->text;
        } 
      $you['media']=$media;  
      }
  } else {
  $media = $you['media'];
  }
  
  if (!$media[0][thumburl] && !$media[1][thumburl])
    {
    $wpfb_cached='false';
    //check if from cached. If cache not available, use option stored.
    $newyoumedia=get_option($key);
    $newyoumedia = base64_decode($newyoumedia);
    $newyoumedia = unserialize($newyoumedia);
    $media=$newyoumedia['media'];
    $you['media']=$media;
    }
  
    
  if ($media[0][thumburl] || $media[1][thumburl]){
  for($m=1; $m <= $options['max']; $m++)
  {
    if ($media[$m][thumburl])
    {
    echo '<a href="'.$media[$m][link].'" target="_blank"><img src="'.$media[$m][thumburl].'" height="50" width="50" style="padding:3px;" alt="'.$media[$m][text].'" title="'.$media[$m][text].'"></a>';
    }
  }
  } else {echo '<br>Invalid username, no pictures on account, or instagram servers not found';}
  
echo '</div>';

if ($wpfb_cached=='false')
  {
  $you=serialize($you);
  $you=base64_encode($you);
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
  echo '<th style="vertical-align:top">';
  if (get_option(wpflybox_usecustombutton) == "true")
    {
    echo '<a class="wpflybox_button" href="#"><img src="'.WP_PLUGIN_URL.'/wp-flybox/static/icons/instagram.png" height="30" alt="I"></a>';
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
  echo '<th style="vertical-align:top">';
  if (get_option(wpflybox_usecustombutton) == "true")
    {
    echo '<a class="wpflybox_button" href="#"><img src="'.WP_PLUGIN_URL.'/wp-flybox/static/icons/instagram.png" height="30" alt="I"></a>';
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