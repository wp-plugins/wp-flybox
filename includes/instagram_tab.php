<?php
$wpflybox_my_instagram_tab=get_option('wpflybox_my_instagram_tab');
if ($wpflybox_my_instagram_tab!='')
  {
  $wpflybox_instagram_tab_height=intval(get_option('wpflybox_my_instagram_tab_height'));
  $wpflybox_instagram_tab_width=intval(get_option('wpflybox_my_instagram_tab_width'));
  }else 
  {
  $wpflybox_instagram_tab_height=32;
  $wpflybox_instagram_tab_width=32;
  }
if ($right_or_left=='right'){$right_or_left_cap='Right';}else{$right_or_left_cap='Left';}
if ($wpflybox_my_instagram_tab!='')
  {
  echo '<img src="'.$wpflybox_my_instagram_tab.'" style="height:'.$wpflybox_instagram_tab_height.'px;width:'.$wpflybox_instagram_tab_width.'px;" alt="F">';
  }else 
  {
  if ($use_custom_button=='true')
    {
    echo '<img src="'.$plugin_url.'/wp-flybox/static/icons/instagram.png" height="30" width="30" alt="F">';
    }else{
    echo '<div style="margin:0px; width:33px; height:101px; background-position:0px -1010px; background-image:url(\''.$plugin_url.'/wp-flybox/static/FlyBoxSprite'.$right_or_left_cap.'.png\');padding:0px;"> </div>';
    }
  }
?>