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
$wpflybox_key="cyle";
$wpflybox_contactencrypted = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($wpflybox_key), $wpflybox_contactemail, MCRYPT_MODE_CBC, md5(md5($wpflybox_key))));

$wpflybox_flickr=get_option(wpflybox_flickr);
$wpflybox_flickr_tag=get_option(wpflybox_flickr_tag);

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


if (get_option(wpflybox_side)=="left"){
if ($wpflybox_isie>0){
?>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js' type='text/javascript'></script>
<script type='text/javascript'> 
jQuery(document).ready (
function(){jQuery("#wpfb-facebook").hover(function(){ jQuery(this).stop(true,false).animate({left:  32}, 500); },
function(){ jQuery("#wpfb-facebook").stop(true,false).animate({left: -296}, 500); });    
jQuery("#wpfb-twitter").hover(function(){ jQuery(this).stop(true,false).animate({left:  32}, 500); },
function(){ jQuery("#wpfb-twitter").stop(true,false).animate({left: -269}, 500); });     
jQuery("#wpfb-googleplus").hover(function(){ jQuery(this).stop(true,false).animate({left:  32}, 500); },
function(){ jQuery("#wpfb-googleplus").stop(true,false).animate({left: -329}, 500); });    
jQuery("#wpfb-youtube").hover(function(){ jQuery(this).stop(true,false).animate({left:  32}, 500); },
function(){ jQuery("#wpfb-youtube").stop(true,false).animate({left: -304}, 500); });  
jQuery("#wpfb-subscribe").hover(function(){ jQuery(this).stop(true,false).animate({left:  32}, 500); },
function(){ jQuery("#wpfb-subscribe").stop(true,false).animate({left: -294}, 500); });
jQuery("#wpfb-pinterest").hover(function(){ jQuery(this).stop(true,false).animate({left:  32}, 500); },
function(){ jQuery("#wpfb-pinterest").stop(true,false).animate({left: -258}, 500); }); 
jQuery("#wpfb-linkedin").hover(function(){ jQuery(this).stop(true,false).animate({left:  32}, 500); },
function(){ jQuery("#wpfb-linkedin").stop(true,false).animate({left: -368}, 500); }); 
jQuery("#wpfb-contact").hover(function(){ jQuery(this).stop(true,false).animate({left:  32}, 500); },
function(){ jQuery("#wpfb-contact").stop(true,false).animate({left: -284}, 500); }); 
jQuery("#wpfb-flickr").hover(function(){ jQuery(this).stop(true,false).animate({left:  32}, 500); },
function(){ jQuery("#wpfb-flickr").stop(true,false).animate({left: -117}, 500); });   
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
$i=1;
while ($i <= $wpflybox_count)
    {
    if ($wpflybox_tabs[$i]=="facebook")
        {
        echo 'div.wpfb-facebook {width:328px;top:'.$wpflybox_pos[$i].';left:-296px;position:fixed;z-index:900;}';
        echo 'div.wpfb-facebook div.wpfb-facebook-transition {margin-left: 0px;-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        echo 'div.wpfb-facebook div.wpfb-facebook-transition iframe {border:0px;overflow:hidden;position:static;height:260px;}';
        if (!$wpflybox_isie){echo 'div.wpfb-facebook:hover div.wpfb-facebook-transition {margin-left: 328px;}';} 
        }
    if ($wpflybox_tabs[$i]=="twitter")
        {
        echo 'div.wpfb-twitter {width:301px;height:241px;top:'.$wpflybox_pos[$i].';left:-269px;position:fixed;z-index:900;}';
        echo 'div.wpfb-twitter div.wpfb-twitter-transition {margin-left: 0px;-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        if (!$wpflybox_isie){echo 'div.wpfb-twitter:hover div.wpfb-twitter-transition {margin-left: 301px;}';}  
        }
    if ($wpflybox_tabs[$i]=="googleplus")
        {
        echo 'div.wpfb-googleplus {width:361px;top:'.$wpflybox_pos[$i].';left:-329px;position:fixed;z-index:900;}';
        echo 'div.wpfb-googleplus div.wpfb-googleplus-transition {margin-left:0;-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        echo 'div.wpfb-googleplus div.wpfb-googleplus-transition iframe {border:0px;overflow:hidden;position:static;}';
        if (!$wpflybox_isie){echo 'div.wpfb-googleplus:hover div.wpfb-googleplus-transition {margin-left: 361px;}';} 
        }
    if ($wpflybox_tabs[$i]=="youtube")
        {        
        echo 'div.wpfb-youtube {width:336px;height:110px;top:'.$wpflybox_pos[$i].';left:-304px;position:fixed;z-index:900;}';
        echo 'div.wpfb-youtube div.wpfb-youtube-transition {margin-left:0;-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        if (!$wpflybox_isie){echo 'div.wpfb-youtube:hover div.wpfb-youtube-transition {margin-left: 336px;}';}
        }
    if ($wpflybox_tabs[$i]=="subscription")
        {
        echo 'div.wpfb-subscribe {width:326px;height:101px;top:'.$wpflybox_pos[$i].';left:-294px;position:fixed;z-index:900;}';
        echo 'div.wpfb-subscribe div.wpfb-subscribe-transition {margin-left:0px;-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        if (!$wpflybox_isie){echo 'div.wpfb-subscribe:hover div.wpfb-subscribe-transition {margin-left: 326px;}';}   
        }    
    if ($wpflybox_tabs[$i]=="pinterest")
        {     
        echo 'div.wpfb-pinterest {width:290px;height:101px;top:'.$wpflybox_pos[$i].';left:-258px;position:fixed;z-index:900;}';
        echo 'div.wpfb-pinterest div.wpfb-pinterest-transition {margin-left:0px;-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        if (!$wpflybox_isie){echo 'div.wpfb-pinterest:hover div.wpfb-pinterest-transition {margin-left: 290px;}';}
        }
    if ($wpflybox_tabs[$i]=="linkedin")
        {         
        echo 'div.wpfb-linkedin {width:400px;height:168px;top:'.$wpflybox_pos[$i].';left:-368px;position:fixed;z-index:900;}';
        echo 'div.wpfb-linkedin div.wpfb-linkedin-transition {margin-left:0px;-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        echo 'div.wpfb-linkedin div.wpfb-facebook-transition iframe {border:0px;overflow:hidden;position:static;height:260px;}';
        if (!$wpflybox_isie){echo 'div.wpfb-linkedin:hover div.wpfb-linkedin-transition {margin-left: 400px;}';}
        }
    if ($wpflybox_tabs[$i]=="contact")
        {
        echo 'div.wpfb-contact {width:316px;height:300px;top:'.$wpflybox_pos[$i].';left:-284px;position:fixed;z-index:900;}';
        echo 'div.wpfb-contact div.wpfb-contact-transition {margin-left:0px;-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        echo 'div.wpfb-contact div.wpfb-contact-transition iframe {border:0px;overflow:hidden;position:static;height:260px;}';
        if (!$wpflybox_isie){echo 'div.wpfb-contact:hover div.wpfb-contact-transition {margin-left: 316px;}';}                 
        }
    if ($wpflybox_tabs[$i]=="flickr")
        {
        echo 'div.wpfb-flickr {width:149px;height:155px;top:'.$wpflybox_pos[$i].';left:-117px;position:fixed;z-index:900;}';
        echo 'div.wpfb-flickr div.wpfb-flickr-transition {margin-left:0px;-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        echo 'div.wpfb-flickr div.wpfb-flickr-transition iframe {border:0px;overflow:hidden;position:static;}';
        if (!$wpflybox_isie){echo 'div.wpfb-flickr:hover div.wpfb-flickr-transition {margin-left: 149px;}';}               
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
        <div class="wpfb-facebook" id="wpfb-facebook"><div class="wpfb-facebook-transition"><table class="wpflyboxtable"><tr style="background:transparent"><th style="background-color:#fff; border: 2px solid #3c95d9;width:292px;overflow:hidden;padding:0px;"><iframe src="http://www.facebook.com/plugins/likebox.php?href=<?php echo $wpflybox_facebook; ?>&amp;locale=en_GB&amp;width=<?php echo $wpflybox_facebook_width; ?>&amp;height=<?php echo $wpflybox_facebook_height; ?>&amp;colorscheme=<?php echo $wpflybox_facebook_color; ?>&amp;show_faces=<?php echo $wpflybox_facebook_showfaces; ?>&amp;stream=<?php echo $wpflybox_facebook_stream; ?>&amp;header=<?php echo $wpflybox_facebook_header; ?>" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:<?php echo $wpflybox_facebook_height; ?>px;" allowTransparency="true"></iframe></th><th valign="top"><a href="#"><div style="margin-left:0px; margin-top:0px; width:32px; height:101px; background-position:0px -303px; background-image:url('<?php echo $wpflybox_sprite_url; ?>');"> </div></a></th></tr></table></div></div>
        <?php
        }
    if ($wpflybox_tabs[$i]=="twitter")
        {
        ?>
        <div class="wpfb-twitter" id="wpfb-twitter"><div class="wpfb-twitter-transition"><table class="wpflyboxtable"><tr style="background:transparent"><th style="background-color:#ffffff; border: 2px solid #6CC5FF; width:265px; height:237px; overflow:hidden;padding:0px;"><script type="text/javascript" src="<?php echo plugins_url().'/wp-flybox/static/twitterbox.js'; ?>"></script><div id="twitterfanbox"></div><script type="text/javascript">fanbox_init("<?php echo $wpflybox_twitter; ?>");</script></th><th valign="top"><a href="#"><div style="margin-left:0px; margin-top:0px; width:32px; height:101px; background-position:0px -606px; background-image:url('<?php echo $wpflybox_sprite_url; ?>');"> </div></a></th></tr></table></div></div>
        <?php
        }
    if ($wpflybox_tabs[$i]=="googleplus")
        {
        if (get_option(wpflybox_google_type)== 'profile')
            {
            ?>    
            <div class="wpfb-googleplus" id="wpfb-googleplus"><div class="wpfb-googleplus-transition"><table class="wpflyboxtable"><tr style="background:transparent"><th style="background-color:#ffffff; border: 2px solid #006ec9;width:325px; overflow:hidden;padding:0px;"><iframe src="http://www.google.com/s2/u/0/widgets/ProfileCard?uid=<?php echo $wpflybox_google; ?>" scrolling="no"></iframe></th><th valign="top" style="padding:0px;background:none;border:0px"><a href="#"><div style="margin-left:0px; margin-top:0px; width:32px; height:101px; background-position:0px -404px; background-image:url('<?php echo $wpflybox_sprite_url; ?>');padding:0px;"> </div></a></th></tr></table></div></div>
            <?php
            } else if (get_option(wpflybox_google_type)== 'page')
            {
            ?>    
            <div class="wpfb-googleplus" id="wpfb-googleplus"><div class="wpfb-googleplus-transition"><table class="wpflyboxtable"><tr style="background:transparent"><th style="background-color:#ffffff; border: 2px solid #006ec9;width:325px; overflow:hidden;padding:0px;"><script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script><div class="g-plus" data-href="https://plus.google.com/<?php echo $wpflybox_google; ?>?rel=publisher"></div></th><th valign="top"><a href="#"><div style="margin-left:0px; margin-top:0px; width:32px; height:101px; background-position:0px -404px; background-image:url('<?php echo $wpflybox_sprite_url; ?>');"> </div></a></th></tr></table></div></div> 
            <?php    
            }   
        }
    if ($wpflybox_tabs[$i]=="youtube")
        {
        ?>
        <div class="wpfb-youtube" id="wpfb-youtube"><div class="wpfb-youtube-transition"><table class="wpflyboxtable"><tr style="background:transparent"><th style="background-color:#fff; border: 2px solid #ff0000; width:300px; height;105px; overflow:hidden;padding:0px;"><iframe src=http://www.youtube.com/subscribe_widget?p=<?php echo $wpflybox_youtube; ?> style="height: 105px; width: 300px; border: 0;" scrolling="no" frameBorder="0"></iframe></th><th valign="top"><a href="#"><div style="margin-left:px; margin-top:0px; width:32px; height:101px; background-position:0px -202px; background-image:url('<?php echo $wpflybox_sprite_url; ?>');"> </div></a></th></tr></table></div></div>
        <?php    
        }
    if ($wpflybox_tabs[$i]=="subscription")
        {
        ?>
        <div class="wpfb-subscribe" id="wpfb-subscribe"><div class="wpfb-subscribe-transition"><table class="wpflyboxtable"><tr style="background:transparent"><th style="background-color:#fff; border: 2px solid #5b5b5b; width:290px; height:97px; overflow:hidden;padding:0px;"><center><p style="color:#F66303;margin-right:10px;margin-left:10px;width:270px;font-size:14px;">Subscribe to Receive E-Mail Updates:</p> <form action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=<?php echo $wpflybox_feedburner; ?>', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true"><input style="padding:2px;" gtbfieldid="10" class="enteryouremail" name="email" value="Enter Your E-Mail Here..." onblur="if (this.value == &#39;&#39;) {this.value = &#39;Enter Your E-Mail Here...&#39;;}" onfocus="if (this.value == &#39;Enter Your E-Mail Here...&#39;) {this.value = &#39;&#39;;}" type="text" /><input value="Trickstreasure" name="uri" type="hidden" /><input style="padding:2px;" value="Submit" class="submitbutton" type="submit" /></form></center></th><th valign="top"><a href="#"><div style="margin-left:0px; margin-top:0x; width:32px; height:101px; background-position:0px 0px; background-image:url('<?php echo $wpflybox_sprite_url; ?>');"> </div></a></th></tr></table></div></div>
        <?php
        }    
    if ($wpflybox_tabs[$i]=="pinterest")
        {
        ?>
        <div class="wpfb-pinterest" id="wpfb-pinterest"><div class="wpfb-pinterest-transition"><table class="wpflyboxtable"><tr style="background:transparent"><th style="background-color:#fff; border: 2px solid #f81f22; width:254px; height:98px; overflow:hidden;padding:0px;">
        <div align="center"><a href="http://pinterest.com/<?php echo $wpflybox_pinterest; ?>"><img src="<?php echo $wpflybox_pinterest_button_url; ?>" title="Pinterest" width="250" height="60" border="0" /></a></div>
        </th><th valign="top"><a href="#"><div style="margin-left:0px; margin-top:0px; width:32px; height:101px; background-position:0px -101px; background-image:url('<?php echo $wpflybox_sprite_url; ?>');"> </div></a></th></tr></table></div></div>
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
        <th valign="top"><a href="#"><div style="margin-left:0px; margin-top:0px; width:32px; height:101px; background-position:0px -505px; background-image:url('<?php echo $wpflybox_sprite_url; ?>');"></div></a></th></tr></table></div></div>
        <?php
        }
        
    if ($wpflybox_tabs[$i]=="contact")
        {
        ?>
        <div class="wpfb-contact" id="wpfb-contact"><div class="wpfb-contact-transition"><table class="wpflyboxtable"><tr style="background:transparent"><th style="background-color:#fff; border: 2px solid #2653a1;width:280px; overflow:hidden;padding:0px;">
        <center><form style="padding:5px;" action="<?php echo plugins_url(); ?>/wp-flybox/contact.php";" method="post" target="popupwindow" onsubmit="window.open('<?php echo plugins_url(); ?>/wp-flybox/contact.php', 'popupwindow', 'scrollbars=no,width=300,height=300');return true">
        <p>Name: <input style="padding:1px;" gtbfieldid="10" class="enteryourname" name="name" id="name" type="text" /></p>
        <p>Email: <input style="padding:1px;" gtbfieldid="10" class="enteryouremail" name="email" id="email" type="text" /></p>
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
        <th valign="top"><a href="#"><div style="margin-left:0px; margin-top:0px; width:32px; height:101px; background-position:0px -707px; background-image:url('<?php echo $wpflybox_sprite_url; ?>');"></div></a></th></tr></table></div></div>
        <?php         
        }
        
if ($wpflybox_tabs[$i]=="flickr")
        {
        ?>
        <div class="wpfb-flickr" id="wpfb-flickr"><div class="wpfb-flickr-transition"><table class="wpflyboxtable"><tr style="background:transparent"><th style="background-color:#fff; border: 2px solid #0063DC; overflow:hidden;padding:0px;">
        <iframe style="background-color:#ffffff; border-color:#ffffff; border:none;" width="113" height="151" frameborder="0" scrolling="no" src="http://www.flickr.com/apps/badge/badge_iframe.gne?zg_bg_color=ffffff&zg_person_id=<?php echo $wpflybox_flickr; ?>&zg_tags=<?php echo $wpflybox_flickr_tag; ?>&zg_tag_mode=any" title="Flickr Badge"></iframe>
        </th><th valign="top"><a href="#"><div style="margin-left:0px; margin-top:0px; width:32px; height:101px; background-position:0px -808px; background-image:url('<?php echo $wpflybox_sprite_url; ?>');"> </div></a></th></tr></table></div></div>
        <?php        
        }                
        
    $i=$i+1;    
    }
?>






<?php 
} else if (get_option(wpflybox_side)=="right"){

if ($wpflybox_isie>0){
?>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js' type='text/javascript'></script>
<script type='text/javascript'> 
jQuery(document).ready (
function(){jQuery("#wpfb-facebook").hover(function(){ jQuery(this).stop(true,false).animate({right:  32}, 500); },
function(){ jQuery("#wpfb-facebook").stop(true,false).animate({right: -296}, 500); });    
jQuery("#wpfb-twitter").hover(function(){ jQuery(this).stop(true,false).animate({right:  32}, 500); },
function(){ jQuery("#wpfb-twitter").stop(true,false).animate({right: -269}, 500); });     
jQuery("#wpfb-googleplus").hover(function(){ jQuery(this).stop(true,false).animate({right:  32}, 500); },
function(){ jQuery("#wpfb-googleplus").stop(true,false).animate({right: -329}, 500); });    
jQuery("#wpfb-youtube").hover(function(){ jQuery(this).stop(true,false).animate({right:  32}, 500); },
function(){ jQuery("#wpfb-youtube").stop(true,false).animate({right: -304}, 500); });  
jQuery("#wpfb-subscribe").hover(function(){ jQuery(this).stop(true,false).animate({right:  32}, 500); },
function(){ jQuery("#wpfb-subscribe").stop(true,false).animate({right: -294}, 500); });
jQuery("#wpfb-pinterest").hover(function(){ jQuery(this).stop(true,false).animate({right:  32}, 500); },
function(){ jQuery("#wpfb-pinterest").stop(true,false).animate({right: -258}, 500); }); 
jQuery("#wpfb-linkedin").hover(function(){ jQuery(this).stop(true,false).animate({right:  32}, 500); },
function(){ jQuery("#wpfb-linkedin").stop(true,false).animate({right: -368}, 500); }); 
jQuery("#wpfb-contact").hover(function(){ jQuery(this).stop(true,false).animate({right:  32}, 500); },
function(){ jQuery("#wpfb-contact").stop(true,false).animate({right: -284}, 500); });
jQuery("#wpfb-flickr").hover(function(){ jQuery(this).stop(true,false).animate({right:  32}, 500); },
function(){ jQuery("#wpfb-flickr").stop(true,false).animate({right: -117}, 500); });    
});
</script>
<?php
}

$wpflybox_sprite_url=plugins_url()."/wp-flybox/static/FlyBoxSpriteRight.png";
?>
<style type="text/css">
table.wpflyboxtable, .wpflyboxtable tbody, .wpflyboxtable th, .wpflyboxtable tr, .wpflyboxtable td, table.wpflyboxtable th, table.wpflyboxtable tr:hover, table.wpflyboxtable tr{margin: 0;padding: 0;border: 0;outline: 0;font-size: 100%;background: transparent;vertical-align:top;display: table-cell;font-weight: normal;text-align: center;border-spacing:0px;}
<?php
$i=1;
while ($i <= $wpflybox_count)
    {
    if ($wpflybox_tabs[$i]=="facebook")
        {
        echo 'div.wpfb-facebook {width:328px;top:'.$wpflybox_pos[$i].';right:-296px;position:fixed;z-index:900;}';
        echo 'div.wpfb-facebook div.wpfb-facebook-transition {-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        echo 'div.wpfb-facebook div.wpfb-facebook-transition iframe {border:0px;overflow:hidden;position:static;height:260px;}';
        if (!$wpflybox_isie){echo 'div.wpfb-facebook:hover div.wpfb-facebook-transition {margin-left: -328px;}';}  
        }
    if ($wpflybox_tabs[$i]=="twitter")
        {
        echo 'div.wpfb-twitter {width:301px;height:241px;top:'.$wpflybox_pos[$i].';right:-269px;position:fixed;z-index:900;}';
        echo 'div.wpfb-twitter div.wpfb-twitter-transition {-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        if (!$wpflybox_isie){echo 'div.wpfb-twitter:hover div.wpfb-twitter-transition {margin-left: -301px;}';}  
        }
    if ($wpflybox_tabs[$i]=="googleplus")
        {
        echo 'div.wpfb-googleplus {width:361px;top:'.$wpflybox_pos[$i].';right:-329px;position:fixed;z-index:900;}';
        echo 'div.wpfb-googleplus div.wpfb-googleplus-transition {-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        if (!$wpflybox_isie){echo 'div.wpfb-googleplus:hover div.wpfb-googleplus-transition {margin-left: -361px;}';}
        echo 'div.wpfb-googleplus div.wpfb-googleplus-transition iframe {border:0px;overflow:hidden;position:static;}';
        }
    if ($wpflybox_tabs[$i]=="youtube")
        {        
        echo 'div.wpfb-youtube {width:336px;height:110px;top:'.$wpflybox_pos[$i].';right:-304px;position:fixed;z-index:900;}';
        echo 'div.wpfb-youtube div.wpfb-youtube-transition {-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        if (!$wpflybox_isie){echo 'div.wpfb-youtube:hover div.wpfb-youtube-transition {margin-left: -336px;}';}
        }
    if ($wpflybox_tabs[$i]=="subscription")
        {
        echo 'div.wpfb-subscribe {width:326px;height:101px;top:'.$wpflybox_pos[$i].';right:-294px;position:fixed;z-index:900;}';
        echo 'div.wpfb-subscribe div.wpfb-subscribe-transition {-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        if (!$wpflybox_isie){echo 'div.wpfb-subscribe:hover div.wpfb-subscribe-transition {margin-left: -326px;}';}   
        }    
    if ($wpflybox_tabs[$i]=="pinterest")
        {     
        echo 'div.wpfb-pinterest {width:290px;height:101px;top:'.$wpflybox_pos[$i].';right:-258px;position:fixed;z-index:900;}';
        echo 'div.wpfb-pinterest div.wpfb-pinterest-transition {-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        if (!$wpflybox_isie){echo 'div.wpfb-pinterest:hover div.wpfb-pinterest-transition {margin-left: -290px;}';}
        }
    if ($wpflybox_tabs[$i]=="linkedin")
        {         
        echo 'div.wpfb-linkedin {width:400px;height:168px;top:'.$wpflybox_pos[$i].';right:-368px;position:fixed;z-index:900;}';
        echo 'div.wpfb-linkedin div.wpfb-linkedin-transition {-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        if (!$wpflybox_isie){echo 'div.wpfb-linkedin:hover div.wpfb-linkedin-transition {margin-left: -400px;}';}
        echo 'div.wpfb-linkedin div.wpfb-facebook-transition iframe {border:0px;overflow:hidden;position:static;height:260px;}';
        }
    if ($wpflybox_tabs[$i]=="contact")
        {
        echo 'div.wpfb-contact {width:316px;height:300px;top:'.$wpflybox_pos[$i].';right:-284px;position:fixed;z-index:900;}';
        echo 'div.wpfb-contact div.wpfb-contact-transition {margin-left:0px;-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        echo 'div.wpfb-contact div.wpfb-contact-transition iframe {border:0px;overflow:hidden;position:static;height:260px;}';
        if (!$wpflybox_isie){echo 'div.wpfb-contact:hover div.wpfb-contact-transition {margin-left: -316px;}';}                 
        }      
    if ($wpflybox_tabs[$i]=="flickr")
        {
        echo 'div.wpfb-flickr {width:149px;height:155px;top:'.$wpflybox_pos[$i].';right:-117px;position:fixed;z-index:900;}';
        echo 'div.wpfb-flickr div.wpfb-flickr-transition {margin-left:0px;-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        echo 'div.wpfb-flickr div.wpfb-flickr-transition iframe {border:0px;overflow:hidden;position:static;}';
        if (!$wpflybox_isie){echo 'div.wpfb-flickr:hover div.wpfb-flickr-transition {margin-left: -149px;}';}               
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
        <div class="wpfb-facebook" id="wpfb-facebook"><div class="wpfb-facebook-transition"><table class="wpflyboxtable"><tr style="background:transparent"><th valign="top" ><a href="#"><div style="margin-right:0px; margin-top:0px; width:32px; height:101px; background-position:0px -303px; background-image:url('<?php echo $wpflybox_sprite_url; ?>')"> </div></a></th><th style="background-color:#fff; border: 2px solid #3c95d9;width:292px;overflow:hidden;padding:0px;"><iframe src="http://www.facebook.com/plugins/likebox.php?href=<?php echo $wpflybox_facebook; ?>&amp;locale=en_GB&amp;width=<?php echo $wpflybox_facebook_width; ?>&amp;height=<?php echo $wpflybox_facebook_height; ?>&amp;colorscheme=<?php echo $wpflybox_facebook_color; ?>&amp;show_faces=<?php echo $wpflybox_facebook_showfaces; ?>&amp;stream=<?php echo $wpflybox_facebook_stream; ?>&amp;header=<?php echo $wpflybox_facebook_header; ?>" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:<?php echo $wpflybox_facebook_height; ?>px;" allowTransparency="true"></iframe></th></th></tr></table></div></div>
        <?php
        }
    if ($wpflybox_tabs[$i]=="twitter")
        {
        ?>
        <div class="wpfb-twitter" id="wpfb-twitter"><div class="wpfb-twitter-transition"><table class="wpflyboxtable"><tr style="background:transparent"><th valign="top"><a href="#"><div style="margin-right:0px; margin-top:0px; width:32px; height:101px; background-position:0px -606px; background-image:url('<?php echo $wpflybox_sprite_url; ?>')"> </div></a></th><th style="background-color:#ffffff; border: 2px solid #6CC5FF;width:265px; height:237px; overflow:hidden;"><script type="text/javascript" src="<?php echo plugins_url().'/wp-flybox/static/twitterbox.js'; ?>"></script><div id="twitterfanbox"></div><script type="text/javascript">fanbox_init("<?php echo $wpflybox_twitter; ?>");</script></th></th></tr></table></div></div>
        <?php
        }
    if ($wpflybox_tabs[$i]=="googleplus")
        {
        if (get_option(wpflybox_google_type)== 'profile')
            {
            ?>    
            <div class="wpfb-googleplus" id="wpfb-googleplus"><div class="wpfb-googleplus-transition"><table class="wpflyboxtable"><tr style="background:transparent"><th valign="top"><a href="#"><div style="margin-right:0px; margin-top:0px; width:32px; height:101px; background-position:0px -404px; background-image:url('<?php echo $wpflybox_sprite_url; ?>')"> </div></a></th><th style="background-color:#ffffff; border: 2px solid #006EC9;width:325px; overflow:hidden;"><iframe src="http://www.google.com/s2/u/0/widgets/ProfileCard?uid=<?php echo $wpflybox_google; ?>" width="100%" height="125px" scrolling="no" style="border:0px;"></iframe></th></tr></table></div></div>
            <?php
            } else if (get_option(wpflybox_google_type)== 'page')
            {
            ?>    
            <div class="wpfb-googleplus" id="wpfb-googleplus"><div class="wpfb-googleplus-transition"><table class="wpflyboxtable"><tr style="background:transparent"><th valign="top"><a href="#"><div style="margin-right:0px; margin-top:0px; width:32px; height:101px; background-position:0px -404px; background-image:url('<?php echo $wpflybox_sprite_url; ?>')"> </div></a></th><th style="background-color:#ffffff border: 2px solid #006EC9;width:325px; overflow:hidden;"><script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script><div class="g-plus" data-href="https://plus.google.com/<?php echo $wpflybox_google; ?>?rel=publisher"></div></th></tr></table></div></div>
            <?php    
            }   
        }
    if ($wpflybox_tabs[$i]=="youtube")
        {
        ?>
        <div class="wpfb-youtube" id="wpfb-youtube"><div class="wpfb-youtube-transition"><table class="wpflyboxtable"><tr style="background:transparent"><th valign="top"><a href="#"><div style="margin-right:0px; margin-top:0px; width:32px; height:101px; background-position:0px -202px; background-image:url('<?php echo $wpflybox_sprite_url; ?>')"> </div></a></th><th style="background-color:#fff; border: 2px solid #ff0000; width:300px; height;105px; overflow:hidden;"><iframe src=http://www.youtube.com/subscribe_widget?p=<?php echo $wpflybox_youtube; ?> style="height: 105px; width: 300px; border: 0;" scrolling="no" frameBorder="0"></iframe></th></tr></table></div></div>
        <?php    
        }
    if ($wpflybox_tabs[$i]=="subscription")
        {
        ?>
        <div class="wpfb-subscribe" id="wpfb-subscribe"><div class="wpfb-subscribe-transition"><table class="wpflyboxtable"><tr style="background:transparent"><th valign="top"><a href="#"><div style="margin-right:0px; margin-top:0px; width:32px; height:101px; background-position:0px 0px; background-image:url('<?php echo $wpflybox_sprite_url; ?>')"> </div></a></th><th style="background-color:#fff; border: 2px solid #5b5b5b; width:290px; height:97px; overflow:hidden;"><center><p style="color:#F66303;margin-right:10px;margin-left:10px;width:270px;font-size:14px;">Subscribe to Receive E-Mail Updates:</p> <form action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=<?php echo $wpflybox_feedburner; ?>', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true"><input style="padding:2px;" gtbfieldid="10" class="enteryouremail" name="email" value="Enter Your E-Mail Here..." onblur="if (this.value == &#39;&#39;) {this.value = &#39;Enter Your E-Mail Here...&#39;;}" onfocus="if (this.value == &#39;Enter Your E-Mail Here...&#39;) {this.value = &#39;&#39;;}" type="text" /><input value="Trickstreasure" name="uri" type="hidden" /><input style="padding:2px; value="Submit" class="submitbutton" type="submit" /></form></center></th></tr></table></div></div>
        <?php
        }    
    if ($wpflybox_tabs[$i]=="pinterest")
        {
        ?>
        <div class="wpfb-pinterest" id="wpfb-pinterest"><div class="wpfb-pinterest-transition"><table class="wpflyboxtable"><tr style="background:transparent"><th valign="top"><a href="#"><div style="margin-right:0px; margin-top:0px; width:32px; height:101px; background-position:0px -101px; background-image:url('<?php echo $wpflybox_sprite_url; ?>')"> </div></a></th><th style="background-color:#fff; border: 2px solid #f81f22; width:254px; height:98px; overflow:hidden;">
        <div align="center"><a href="http://pinterest.com/<?php echo $wpflybox_pinterest; ?>"><img src="<?php echo $wpflybox_pinterest_button_url; ?>" title="Pinterest" width="250" height="60" border="0" /></a></div>
        </th></tr></table></div></div>
        <?php
        }    
    if ($wpflybox_tabs[$i]=="linkedin")
        {
        ?>
        <div class="wpfb-linkedin" id="wpfb-linkedin"><div class="wpfb-linkedin-transition"><table class="wpflyboxtable"><tr style="background:transparent"><th valign="top"><a href="#"><div style="margin-right:0px; margin-top:0px; width:32px; height:101px; background-position:0px -505px; background-image:url('<?php echo $wpflybox_sprite_url; ?>')"> </div></a></th><th style="background-color:#fff; border: 2px solid #4875B4; width:364px; height:159px; overflow:hidden;">
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
        <th valign="top"><a href="#"><div style="margin-left:0px; margin-top:0px; width:32px; height:101px; background-position:0px -707px; background-image:url('<?php echo $wpflybox_sprite_url; ?>');"></div></a></th>
        <th style="background-color:#fff; border: 2px solid #2653a1;width:280px; overflow:hidden;padding:0px;">
        <center><form style="padding:5px;" action="<?php echo plugins_url(); ?>/wp-flybox/contact.php";" method="post" target="popupwindow" onsubmit="window.open('<?php echo plugins_url(); ?>/wp-flybox/contact.php', 'popupwindow', 'scrollbars=no,width=300,height=300');return true">
        <p>Name: <input style="padding:1px;" gtbfieldid="10" class="enteryourname" name="name" id="name" type="text" /></p>
        <p>Email: <input style="padding:1px;" gtbfieldid="10" class="enteryouremail" name="email" id="email" type="text" /></p>
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
        <th valign="top"><a href="#"><div style="margin-left:0px; margin-top:0px; width:32px; height:101px; background-position:0px -808px; background-image:url('<?php echo $wpflybox_sprite_url; ?>');"> </div></a></th>
        <th style="background-color:#fff; border: 2px solid #0063DC; overflow:hidden;padding:0px;">
        <iframe style="background-color:#ffffff; border-color:#ffffff; border:none;" width="113" height="151" frameborder="0" scrolling="no" src="http://www.flickr.com/apps/badge/badge_iframe.gne?zg_bg_color=ffffff&zg_person_id=<?php echo $wpflybox_flickr; ?>&zg_tags=<?php echo $wpflybox_flickr_tag; ?>&zg_tag_mode=any" title="Flickr Badge"></iframe>
        </th>
        </tr></table></div></div>
        <?php        
        }         
                     
        
    $i=$i+1;    
    }
}//end if right
}//end mobile detection
?>




