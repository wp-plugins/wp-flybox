<?php
if (get_option('wpflybox_contactwho') == "us"){$wpflybox_contactwhopixel="1111";} else {$wpflybox_contactwhopixel="707";}
if ($right_or_left=='right'){$right_or_left_cap='Right';}else{$right_or_left_cap='Left';}
if ($use_custom_button=='true')
  {
  echo '<img src="'.$plugin_url.'/wp-flybox/static/icons/contact.png" height="30" width="30" alt="F">';
  }else{
  echo '<div style="margin:0px; width:33px; height:101px; background-position:0px -'.$wpflybox_contactwhopixel.'px; background-image:url(\''.$plugin_url.'/wp-flybox/static/FlyBoxSprite'.$right_or_left_cap.'.png\');padding:0px;"> </div>';
  }


?>