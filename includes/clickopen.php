<?php
/*
TESTING FOR FUTURE VERSION-------------
---------------------------------------

$wpflybox_side=get_option(wpflybox_side);

$wpflybox_tabs=array(
      1 => get_option(wpflybox_tab1), 
      2 => get_option(wpflybox_tab2), 
      3 => get_option(wpflybox_tab3),
      4 => get_option(wpflybox_tab4), 
      5 => get_option(wpflybox_tab5), 
      6 => get_option(wpflybox_tab6), 
      7 => get_option(wpflybox_tab7), 
      8 => get_option(wpflybox_tab8));   

$wpflybox_start=get_option(wpflybox_start);
if (is_admin_bar_showing()){$wpflybox_admin_bar=get_option(wpflybox_admin_bar);}else{$wpflybox_admin_bar=0;}
$wpflybox_seperation=get_option(wpflybox_seperation);     
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
} else {
  //has px
  $wpflybox_postdim='px';
  $wpflybox_start = str_replace("px", "", $wpflybox_start);
  $wpflybox_seperation = str_replace("px", "", $wpflybox_seperation);
  
  $wpflybox_pos[1]=($wpflybox_start+$wpflybox_admin_bar).$wpflybox_postdim.'';
  $wpflybox_pos[2]=($wpflybox_start+$wpflybox_admin_bar+$wpflybox_seperation).$wpflybox_postdim.'';
  $wpflybox_pos[3]=($wpflybox_start+$wpflybox_admin_bar+(2*$wpflybox_seperation)).$wpflybox_postdim.'';
  $wpflybox_pos[4]=($wpflybox_start+$wpflybox_admin_bar+(3*$wpflybox_seperation)).$wpflybox_postdim.'';
  $wpflybox_pos[5]=($wpflybox_start+$wpflybox_admin_bar+(4*$wpflybox_seperation)).$wpflybox_postdim.'';
  $wpflybox_pos[6]=($wpflybox_start+$wpflybox_admin_bar+(5*$wpflybox_seperation)).$wpflybox_postdim.'';
  $wpflybox_pos[7]=($wpflybox_start+$wpflybox_admin_bar+(6*$wpflybox_seperation)).$wpflybox_postdim.'';
  $wpflybox_pos[8]=($wpflybox_start+$wpflybox_admin_bar+(7*$wpflybox_seperation)).$wpflybox_postdim.'';
}

$wpflybox_position=get_option(wpflybox_position);
if ($wpflybox_position !== "fixed" && $wpflybox_position !=="absolute"){$wpflybox_position="fixed";}
if ($wpflybox_side=='left'){$wpflybox_sideextravalue=36;}      
if ($key=array_search('facebook',$wpflybox_tabs))
    {
    echo '<div style="width:32px;top:'.$wpflybox_pos[$key].';'.$wpflybox_side.':0px;position:'.$wpflybox_position.';height:1000px;z-index:99999999;border:1px solid black;display:block;cursor:wait;"></div>';
    
    }
    
    
---------------------------------------
END TESTING----------------------------    
?>