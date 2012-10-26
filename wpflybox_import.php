<?php
$wpflybox_count=get_option(wpflybox_count);
$wpflybox_tabs[1]=get_option(wpflybox_tab1);
$wpflybox_tabs[2]=get_option(wpflybox_tab2);
$wpflybox_tabs[3]=get_option(wpflybox_tab3);
$wpflybox_tabs[4]=get_option(wpflybox_tab4);
$wpflybox_tabs[5]=get_option(wpflybox_tab5);
$wpflybox_tabs[6]=get_option(wpflybox_tab6);
$wpflybox_tabs[7]=get_option(wpflybox_tab7);
$wpflybox_tabs[8]=get_option(wpflybox_tab8);

$wpflybox_mobile=get_option(wpflybox_mobile);

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
} else {

if (get_option(wpflybox_side) !== "none"){
include 'includes/css.php';

$i=1;
while ($i <= $wpflybox_count)
    {
    if ($wpflybox_tabs[$i]=="facebook")
        {
        include 'includes/facebook.php';
        }
    if ($wpflybox_tabs[$i]=="twitter")
        {
        include 'includes/twitter.php';
        }
    if ($wpflybox_tabs[$i]=="googleplus")
        {
        include 'includes/googleplus.php';  
        }
    if ($wpflybox_tabs[$i]=="youtube")
        {
        include 'includes/youtube.php';
        }
    if ($wpflybox_tabs[$i]=="subscription")
        {
        include 'includes/subscription.php';
        }    
    if ($wpflybox_tabs[$i]=="pinterest")
        {
        include 'includes/pinterest.php';
        }    
    if ($wpflybox_tabs[$i]=="linkedin")
        {
        include 'includes/linkedin.php';
        }        
    if ($wpflybox_tabs[$i]=="contact")
        {
        include 'includes/contact.php';
        }        
    if ($wpflybox_tabs[$i]=="flickr")
        {
        include 'includes/flickr.php';
        }        
    if ($wpflybox_tabs[$i]=="deviant")
        {
        include 'includes/deviant.php';
        }        
    if ($wpflybox_tabs[$i]=="instagram")
        {
        include 'includes/instagram.php';        
        }
    if ($wpflybox_tabs[$i]=="vimeo")
        {
        include 'includes/vimeo.php';        
        }                                            
   
    $i=$i+1;    
    }

}//end mobile detection
}//end check for none side
?>
