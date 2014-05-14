<?php
require_once 'includes/Mobile_Detect.php';
$detect = new Mobile_Detect;
if ((get_option('wpflybox_mobile')=='true' && $detect->isMobile() && !$detect->isTablet()) || (get_option('wpflybox_tablet')=='true' && $detect->isTablet()) || !$detect->isMobile())
{
include('lang/'.get_option('wpflybox_language').'.php');
$number_of_tabs=get_option('wpflybox_count');
$tab_width=30;
if (get_option('wpflybox_usecustombutton')=='true')
  {
  $tab_height=34;
  } else {
  $tab_height=101;
  }
$top_margin=intval(get_option('wpflybox_start'));

if (is_admin_bar_showing()){$top_margin=$top_margin+32;}
$tab_spacing=intval(get_option('wpflybox_seperation'));
$right_or_left=get_option('wpflybox_side');
$use_custom_button=get_option('wpflybox_usecustombutton');
if ($right_or_left=='left'){$opposite_right_or_left='right';}else{$opposite_right_or_left='left';}
$plugin_url=WP_PLUGIN_URL;
$i=1;
$tabs=Array();
while($i<=$number_of_tabs)
  {
  $tabs[$i]=get_option('wpflybox_tab'.$i);
  $i++;
  }
$i=1;
$wpflybox_position=get_option('wpflybox_position');
if ($wpflybox_position !== "fixed" && $wpflybox_position !=="absolute"){$wpflybox_position="fixed";}
while ($i<=$number_of_tabs)
  {
  //wrapper
  echo '<div id="tab'.$i.'" style="display:inline-block;overflow:hidden;position:absolute;border:0px;'.$right_or_left.':-999px;top:';
  if ($i==1)
    {
    echo $top_margin;
    }else{
    $new_spacing = $top_margin+$tab_spacing*($i-1)+$tab_height*($i-1);
    echo $new_spacing;
    }
  echo 'px;z-index:9999'.$i.'">';
  //filler
  echo '<div style="width:'.$tab_width.'px;display:inline-block;float:'.$right_or_left.';height:'.$tab_height.'px;"></div>';
  //click image tab
  echo '<div class="wpflybox_button" style="display:inline-block;float:'.$opposite_right_or_left.';cursor:pointer;">';
  include ('includes/'.$tabs[$i].'_tab.php');
  echo '</div>';
  //content
  include ('includes/'.$tabs[$i].'_content.php');
  echo '</div>';
  $i++;
  }
}//end mobile
?>