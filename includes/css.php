<?php
$wpflybox_isie=strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE');
$wpflybox_bgtopgradient=get_option(wpflybox_bgtopgradient);		
$wpflybox_bgbottomgradient=get_option(wpflybox_bgbottomgradient);       			
$wpflybox_bgborder=get_option(wpflybox_bgborder);
$wpflybox_side=get_option(wpflybox_side);
if ($wpflybox_side=='right')
  {
  $wpflybox_side_operator = '-';
  } else {
  $wpflybox_side_operator = '';
  }

echo '<style type="text/css">';
echo 'table.wpflyboxtable, .wpflyboxtable tbody, .wpflyboxtable th, .wpflyboxtable tr, .wpflyboxtable td, table.wpflyboxtable th, table.wpflyboxtable tr:hover, table.wpflyboxtable tr{margin: 0;padding: 0;border: 0;outline: 0;font-size: 100%;background: transparent;vertical-align:top;display: table-cell;font-weight: normal;text-align: center;border-spacing:0px;}';
if (get_option(wpflybox_usecustombutton) == "true")
  {
  echo '.wpflybox_button {
   border-top: 1px solid #'.$wpflybox_bgborder.';';
   if ($wpflybox_side=='left')
    {
    echo 'border-right: 1px solid #'.$wpflybox_bgborder.';';
    } else {
    echo 'border-left: 1px solid #'.$wpflybox_bgborder.';';
    }
   echo 'border-bottom: 1px solid #'.$wpflybox_bgborder.';
   background: #000000;
   background: -webkit-gradient(linear, right top, left top, from(#'.$wpflybox_bgtopgradient.'), to(#'.$wpflybox_bgbottomgradient.'));
   background: -webkit-linear-gradient(right, #'.$wpflybox_bgtopgradient.', #'.$wpflybox_bgbottomgradient.');
   background: -moz-linear-gradient(right, #'.$wpflybox_bgtopgradient.', #'.$wpflybox_bgbottomgradient.');
   background: -ms-linear-gradient(right, #'.$wpflybox_bgtopgradient.', #'.$wpflybox_bgbottomgradient.');
   background: -o-linear-gradient(right, #'.$wpflybox_bgtopgradient.', #'.$wpflybox_bgbottomgradient.');
   display:block;
   height:32px;
   width: 32px;
   margin: 0px;
   padding: 0px;';
   if ($wpflybox_side=='left')
    {
    echo '-webkit-border-radius: 0px 9px 9px 0px;
   -moz-border-radius: 0px 9px 9px 0px;
   border-radius: 0px 9px 9px 0px;';
   } else {
   echo '-webkit-border-radius: 9px 0px 0px 9px;
   -moz-border-radius: 9px 0px 0px 9px;
   border-radius: 9px 0px 0px 9px;';
   }
   echo 'color: #ffffff;
   font-size: 10px;
   font-family: Georgia, serif;
   text-decoration: none;
   vertical-align: middle;
   z-index:999999;
   }
  .wpflybox_button img{
   padding:0px;
   }
   .wpflybox_button img:hover {';
   if ($wpflybox_side=='left')
    {
    echo '-webkit-border-radius: 0px 9px 9px 0px;
   -moz-border-radius: 0px 9px 9px 0px;
   border-radius: 0px 9px 9px 0px;';
   } else {
   echo '-webkit-border-radius: 9px 0px 0px 9px;
   -moz-border-radius: 9px 0px 0px 9px;
   border-radius: 9px 0px 0px 9px;';
   }   
   echo 'padding:0px;   
   border-bottom:0px hidden;
   background: #000000;
   background: -webkit-gradient(linear, right top, left top, from(#'.$wpflybox_bgtopgradient.'), to(#'.$wpflybox_bgbottomgradient.'));
   background: -webkit-linear-gradient(right, #'.$wpflybox_bgtopgradient.', #'.$wpflybox_bgbottomgradient.');
   background: -moz-linear-gradient(right, #'.$wpflybox_bgtopgradient.', #'.$wpflybox_bgbottomgradient.');
   background: -ms-linear-gradient(right, #'.$wpflybox_bgtopgradient.', #'.$wpflybox_bgbottomgradient.');
   background: -o-linear-gradient(right, #'.$wpflybox_bgtopgradient.', #'.$wpflybox_bgbottomgradient.');
   color: #000000;
   }';
  }

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
     

$wpflybox_widths=array(
      1 => '292', //facebook 
      2 => '232', //twitter
      3 => '325', //googleplus
      4 => '300', //youtube
      5 => '290', //subscription 
      6 => '254', //pinterest
      7 => '364', //linkedin
      8 => '280', //contact 
      9 => '113', //flickr
      10 => get_option(wpflybox_deviant_frame_width), //deviant
      11 => '196', //instagram
      12 => '220' //vimeo
      );
if (get_option(wpflybox_edge) == 'true')
  {
  $wpflybox_sidemargin=0;
  } else
  {
  $wpflybox_sidemargin=32;
  }      

$wpflybox_sideextravalue=4;
if ($wpflybox_side=='left'){$wpflybox_sideextravalue=36;}      

if ($key=array_search('facebook',$wpflybox_tabs))
    {
    echo 'div.wpfb-facebook {width:'.($wpflybox_widths[1]+68).'px;top:'.$wpflybox_pos[$key].';'.$wpflybox_side.':-'.($wpflybox_widths[1]+36).'px;position:fixed;z-index:999999;text-align:right;direction:ltr;}';
    echo 'div.wpfb-facebook div.wpfb-facebook-transition {width:'.($wpflybox_widths[1]+68).'px;'; if ($wpflybox_side=='left'){echo 'margin-left:32px;';} echo '-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
    echo 'div.wpfb-facebook div.wpfb-facebook-transition iframe {border:0px;overflow:hidden;position:static;}';
    if (!$wpflybox_isie){echo 'div.wpfb-facebook:hover div.wpfb-facebook-transition {margin-left: '.$wpflybox_side_operator.($wpflybox_widths[1]+$wpflybox_sidemargin+$wpflybox_sideextravalue).'px;}';} 
    }
if ($key=array_search('twitter',$wpflybox_tabs))
    {
    echo 'div.wpfb-twitter {width:'.($wpflybox_widths[2]+68).'px;height:241px;top:'.$wpflybox_pos[$key].';'.$wpflybox_side.':-'.($wpflybox_widths[2]+36).'px;position:fixed;z-index:999999;direction:ltr;}';
    echo 'div.wpfb-twitter div.wpfb-twitter-transition {width:'.($wpflybox_widths[2]+68).'px;'; if ($wpflybox_side=='left'){echo 'margin-left:32px;';} echo '-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
    if (!$wpflybox_isie){echo 'div.wpfb-twitter:hover div.wpfb-twitter-transition {margin-left: '.$wpflybox_side_operator.($wpflybox_widths[2]+$wpflybox_sidemargin+$wpflybox_sideextravalue).'px;}';}  
    }
if ($key=array_search('googleplus',$wpflybox_tabs))
    {
    echo 'div.wpfb-googleplus {width:'.($wpflybox_widths[3]+68).'px;top:'.$wpflybox_pos[$key].';'.$wpflybox_side.':-'.($wpflybox_widths[3]+36).'px;position:fixed;z-index:999999;direction:ltr;}';
    echo 'div.wpfb-googleplus div.wpfb-googleplus-transition {width:'.($wpflybox_widths[3]+68).'px;'; if ($wpflybox_side=='left'){echo 'margin-left:32px;';} echo '-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
    echo 'div.wpfb-googleplus div.wpfb-googleplus-transition iframe {border:0px;overflow:hidden;position:static;}';
    if (!$wpflybox_isie){echo 'div.wpfb-googleplus:hover div.wpfb-googleplus-transition {margin-left: '.$wpflybox_side_operator.($wpflybox_widths[3]+$wpflybox_sidemargin+$wpflybox_sideextravalue).'px;}';} 
    }
if ($key=array_search('youtube',$wpflybox_tabs))
    {        
    echo 'div.wpfb-youtube {width:'.($wpflybox_widths[4]+68).'px;height:110px;top:'.$wpflybox_pos[$key].';'.$wpflybox_side.':-'.($wpflybox_widths[4]+36).'px;position:fixed;z-index:999999;direction:ltr;}';
    echo 'div.wpfb-youtube div.wpfb-youtube-transition {width:'.($wpflybox_widths[4]+68).'px;'; if ($wpflybox_side=='left'){echo 'margin-left:32px;';} echo '-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
    if (!$wpflybox_isie){echo 'div.wpfb-youtube:hover div.wpfb-youtube-transition {margin-left: '.$wpflybox_side_operator.($wpflybox_widths[4]+$wpflybox_sidemargin+$wpflybox_sideextravalue).'px;}';}
    }
if ($key=array_search('subscription',$wpflybox_tabs))
    {
    echo 'div.wpfb-subscribe {width:'.($wpflybox_widths[5]+68).'px;height:101px;top:'.$wpflybox_pos[$key].';'.$wpflybox_side.':-'.($wpflybox_widths[5]+36).'px;position:fixed;z-index:999999;direction:ltr;}';
    echo 'div.wpfb-subscribe div.wpfb-subscribe-transition {width:'.($wpflybox_widths[5]+68).'px;'; if ($wpflybox_side=='left'){echo 'margin-left:32px;';} echo '-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
    if (!$wpflybox_isie){echo 'div.wpfb-subscribe:hover div.wpfb-subscribe-transition {margin-left: '.$wpflybox_side_operator.($wpflybox_widths[5]+$wpflybox_sidemargin+$wpflybox_sideextravalue).'px;}';}   
    }    
if ($key=array_search('pinterest',$wpflybox_tabs))
    {     
    echo 'div.wpfb-pinterest {width:'.($wpflybox_widths[6]+68).'px;height:101px;top:'.$wpflybox_pos[$key].';'.$wpflybox_side.':-'.($wpflybox_widths[6]+36).'px;position:fixed;z-index:999999;direction:ltr;}';
    echo 'div.wpfb-pinterest div.wpfb-pinterest-transition {width:'.($wpflybox_widths[6]+68).'px;'; if ($wpflybox_side=='left'){echo 'margin-left:32px;';} echo '-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
    if (!$wpflybox_isie){echo 'div.wpfb-pinterest:hover div.wpfb-pinterest-transition {margin-left: '.$wpflybox_side_operator.($wpflybox_widths[6]+$wpflybox_sidemargin+$wpflybox_sideextravalue).'px;}';}
    }
if ($key=array_search('linkedin',$wpflybox_tabs))
    {         
    echo 'div.wpfb-linkedin {width:'.($wpflybox_widths[7]+68).'px;height:168px;top:'.$wpflybox_pos[$key].';'.$wpflybox_side.':-'.($wpflybox_widths[7]+36).'px;position:fixed;z-index:999999;direction:ltr;}';
    echo 'div.wpfb-linkedin div.wpfb-linkedin-transition {width:'.($wpflybox_widths[7]+68).'px;'; if ($wpflybox_side=='left'){echo 'margin-left:32px;';} echo '-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
    echo 'div.wpfb-linkedin div.wpfb-facebook-transition iframe {border:0px;overflow:hidden;position:static;height:260px;}';
    if (!$wpflybox_isie){echo 'div.wpfb-linkedin:hover div.wpfb-linkedin-transition {margin-left: '.$wpflybox_side_operator.($wpflybox_widths[7]+$wpflybox_sidemargin+$wpflybox_sideextravalue).'px;}';}
    }
if ($key=array_search('contact',$wpflybox_tabs))
    {
    echo 'div.wpfb-contact {width:'.($wpflybox_widths[8]+68).'px;height:300px;top:'.$wpflybox_pos[$key].';'.$wpflybox_side.':-'.($wpflybox_widths[8]+36).'px;position:fixed;z-index:999999;direction:ltr;}';
    echo 'div.wpfb-contact div.wpfb-contact-transition {width:'.($wpflybox_widths[8]+68).'px;'; if ($wpflybox_side=='left'){echo 'margin-left:32px;';} echo '-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
    echo 'div.wpfb-contact div.wpfb-contact-transition iframe {border:0px;overflow:hidden;position:static;height:260px;}';
    if (!$wpflybox_isie){echo 'div.wpfb-contact:hover div.wpfb-contact-transition {margin-left: '.$wpflybox_side_operator.($wpflybox_widths[8]+$wpflybox_sidemargin+$wpflybox_sideextravalue).'px;}';}                 
    }
if ($key=array_search('flickr',$wpflybox_tabs))
    {
    echo 'div.wpfb-flickr {width:'.($wpflybox_widths[9]+68).'px;height:155px;top:'.$wpflybox_pos[$key].';'.$wpflybox_side.':-'.($wpflybox_widths[9]+36).'px;position:fixed;z-index:999999;direction:ltr;}';
    echo 'div.wpfb-flickr div.wpfb-flickr-transition {width:'.($wpflybox_widths[9]+68).'px;'; if ($wpflybox_side=='left'){echo 'margin-left:32px;';} echo '-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
    echo 'div.wpfb-flickr div.wpfb-flickr-transition iframe {border:0px;overflow:hidden;position:static;}';
    if (!$wpflybox_isie){echo 'div.wpfb-flickr:hover div.wpfb-flickr-transition {margin-left: '.$wpflybox_side_operator.($wpflybox_widths[9]+$wpflybox_sidemargin+$wpflybox_sideextravalue).'px;}';}               
    }
if ($key=array_search('deviant',$wpflybox_tabs))
    {
    echo 'div.wpfb-deviant {width:'.($wpflybox_widths[10]+68).'px;top:'.$wpflybox_pos[$key].';'.$wpflybox_side.':-'.($wpflybox_widths[10]+36).'px;position:fixed;z-index:999999;direction:ltr;}';
    echo 'div.wpfb-deviant div.wpfb-deviant-transition {width:'.($wpflybox_widths[10]+68).'px;'; if ($wpflybox_side=='left'){echo 'margin-left:32px;';} echo '-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
    echo 'div.wpfb-deviant div.wpfb-deviant-transition iframe {border:0px;overflow:hidden;position:static;width:'.$wpflybox_widths[10].'px}';
    if (!$wpflybox_isie){echo 'div.wpfb-deviant:hover div.wpfb-deviant-transition {margin-left: '.$wpflybox_side_operator.($wpflybox_widths[10]+$wpflybox_sidemargin+$wpflybox_sideextravalue).'px;}';} 
    }
if ($key=array_search('instagram',$wpflybox_tabs))
    {
    echo 'div.wpfb-instagram a:hover, a:hover img {border:none;}';           
    echo 'div.wpfb-instagram {width:'.($wpflybox_widths[11]+68).'px;top:'.$wpflybox_pos[$key].';'.$wpflybox_side.':-'.($wpflybox_widths[11]+36).'px;position:fixed;z-index:999999;direction:ltr;}';
    echo 'div.wpfb-instagram div.wpfb-instagram-transition {width:'.($wpflybox_widths[11]+68).'px;'; if ($wpflybox_side=='left'){echo 'margin-left:32px;';} echo '-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
    echo 'div.wpfb-instagram div.wpfb-instagram-transition iframe {border:0px;overflow:hidden;position:static;height:260px;}';
    if (!$wpflybox_isie){echo 'div.wpfb-instagram:hover div.wpfb-instagram-transition {margin-left: '.$wpflybox_side_operator.($wpflybox_widths[11]+$wpflybox_sidemargin+$wpflybox_sideextravalue).'px;}';}          
    }
if ($key=array_search('vimeo',$wpflybox_tabs))
        {
        echo 'div.wpfb-vimeo a img, img, a:hover, a:hover img {border: 0;padding: 0px}';         
        echo 'div.wpfb-vimeo {width:'.($wpflybox_widths[12]+68).'px; top:'.$wpflybox_pos[$key].';'.$wpflybox_side.':-'.($wpflybox_widths[12]+36).'px;position:fixed;z-index:999999;direction:ltr;}';
        echo 'div.wpfb-vimeo div.wpfb-vimeo-transition {width:'.($wpflybox_widths[12]+68).'px;'; if ($wpflybox_side=='left'){echo 'margin-left:32px;';} echo '-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        if (!$wpflybox_isie){echo 'div.wpfb-vimeo:hover div.wpfb-vimeo-transition {margin-left: '.$wpflybox_side_operator.($wpflybox_widths[12]+$wpflybox_sidemargin+$wpflybox_sideextravalue).'px;}';}          
        }                                       
echo '</style>';
 
 
//IE Jquery

if ($wpflybox_isie>0)
  {
  if (get_option(wpflybox_jquery)=="on" && jQuery !== undefined)
    {    
    echo '<script src=\''.WP_PLUGIN_URL.'/wp-flybox/static/jquery-1.8.2.min.js\' type=\'text/javascript\'></script>';    
    }
if ($wpflybox_side=='right'){$wpflybox_extramargin=32;}else{$wpflybox_extramargin=32;}
echo '<script type=\'text/javascript\'>'; 
echo 'jQuery(document).ready (
function(){jQuery("#wpfb-facebook").hover(function(){ jQuery(this).stop(true,false).animate({'.$wpflybox_side.':  '.($wpflybox_sidemargin-32).'}, 500); },
function(){ jQuery("#wpfb-facebook").stop(true,false).animate({'.$wpflybox_side.': -'.($wpflybox_widths[1]+$wpflybox_sideextravalue+$wpflybox_extramargin).'}, 500); });       
jQuery("#wpfb-twitter").hover(function(){ jQuery(this).stop(true,false).animate({'.$wpflybox_side.':  '.($wpflybox_sidemargin-32).'}, 500); },
function(){ jQuery("#wpfb-twitter").stop(true,false).animate({'.$wpflybox_side.': -'.($wpflybox_widths[2]+$wpflybox_sideextravalue+$wpflybox_extramargin).'}, 500); });     
jQuery("#wpfb-googleplus").hover(function(){ jQuery(this).stop(true,false).animate({'.$wpflybox_side.':  '.($wpflybox_sidemargin-32).'}, 500); },
function(){ jQuery("#wpfb-googleplus").stop(true,false).animate({'.$wpflybox_side.': -'.($wpflybox_widths[3]+$wpflybox_sideextravalue+$wpflybox_extramargin).'}, 500); });    
jQuery("#wpfb-youtube").hover(function(){ jQuery(this).stop(true,false).animate({'.$wpflybox_side.':  '.($wpflybox_sidemargin-32).'}, 500); },
function(){ jQuery("#wpfb-youtube").stop(true,false).animate({'.$wpflybox_side.': -'.($wpflybox_widths[4]+$wpflybox_sideextravalue+$wpflybox_extramargin).'}, 500); });  
jQuery("#wpfb-subscribe").hover(function(){ jQuery(this).stop(true,false).animate({'.$wpflybox_side.':  '.($wpflybox_sidemargin-32).'}, 500); },
function(){ jQuery("#wpfb-subscribe").stop(true,false).animate({'.$wpflybox_side.': -'.($wpflybox_widths[5]+$wpflybox_sideextravalue+$wpflybox_extramargin).'}, 500); });
jQuery("#wpfb-pinterest").hover(function(){ jQuery(this).stop(true,false).animate({'.$wpflybox_side.':  '.($wpflybox_sidemargin-32).'}, 500); },
function(){ jQuery("#wpfb-pinterest").stop(true,false).animate({'.$wpflybox_side.': -'.($wpflybox_widths[6]+$wpflybox_sideextravalue+$wpflybox_extramargin).'}, 500); }); 
jQuery("#wpfb-linkedin").hover(function(){ jQuery(this).stop(true,false).animate({'.$wpflybox_side.':  '.($wpflybox_sidemargin-32).'}, 500); },
function(){ jQuery("#wpfb-linkedin").stop(true,false).animate({'.$wpflybox_side.': -'.($wpflybox_widths[7]+$wpflybox_sideextravalue+$wpflybox_extramargin).'}, 500); }); 
jQuery("#wpfb-contact").hover(function(){ jQuery(this).stop(true,false).animate({'.$wpflybox_side.':  '.($wpflybox_sidemargin-32).'}, 500); },
function(){ jQuery("#wpfb-contact").stop(true,false).animate({'.$wpflybox_side.': -'.($wpflybox_widths[8]+$wpflybox_sideextravalue+$wpflybox_extramargin).'}, 500); }); 
jQuery("#wpfb-flickr").hover(function(){ jQuery(this).stop(true,false).animate({'.$wpflybox_side.':  '.($wpflybox_sidemargin-32).'}, 500); },
function(){ jQuery("#wpfb-flickr").stop(true,false).animate({'.$wpflybox_side.': -'.($wpflybox_widths[9]+$wpflybox_sideextravalue+$wpflybox_extramargin).'}, 500); });   
jQuery("#wpfb-deviant").hover(function(){ jQuery(this).stop(true,false).animate({'.$wpflybox_side.': '.($wpflybox_sidemargin-32).'}, 500); },
function(){ jQuery("#wpfb-deviant").stop(true,false).animate({'.$wpflybox_side.': -'.($wpflybox_widths[10]+$wpflybox_sideextravalue+$wpflybox_extramargin).'}, 500); });  
jQuery("#wpfb-instagram").hover(function(){ jQuery(this).stop(true,false).animate({'.$wpflybox_side.':  '.($wpflybox_sidemargin-32).'}, 500); },
function(){ jQuery("#wpfb-instagram").stop(true,false).animate({'.$wpflybox_side.': -'.($wpflybox_widths[11]+$wpflybox_sideextravalue+$wpflybox_extramargin).'}, 500); });  
jQuery("#wpfb-vimeo").hover(function(){ jQuery(this).stop(true,false).animate({'.$wpflybox_side.':  '.($wpflybox_sidemargin-32).'}, 500); },
function(){ jQuery("#wpfb-vimeo").stop(true,false).animate({'.$wpflybox_side.': -'.($wpflybox_widths[12]+$wpflybox_sideextravalue+$wpflybox_extramargin).'}, 500); }); 
});
</script>';
  }   
?>    