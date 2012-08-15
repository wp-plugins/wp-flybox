
<!--[if IE]>
<style type="text/css">
#booie {display:none;}
</style>
<![endif]-->
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
$wpflybox_postdim='';
$wpflybox_facebook=get_option(wpflybox_facebook);
$wpflybox_twitter=get_option(wpflybox_twitter);
$wpflybox_google=get_option(wpflybox_google);
$wpflybox_youtube=get_option(wpflybox_youtube);
$wpflybox_feedburner=get_option(wpflybox_feedburner);
$wpflybox_pinterest=get_option(wpflybox_pinterest);
$wpflybox_linkedin=get_option(wpflybox_linkedin);



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
}


if (get_option(wpflybox_side)=="left"){
$wpflybox_sprite_url=plugins_url()."/wp-flybox/static/FlyBoxSpriteLeft.png";
?>
<style type="text/css">
<?php
$i=1;
while ($i <= $wpflybox_count)
    {
    if ($wpflybox_tabs[$i]=="facebook")
        {
        echo 'div.wpfb-facebook {width:336px;height:264px;top:'.$wpflybox_pos[$i].';left:-304px;position:fixed;z-index:900;}';
        echo 'div.wpfb-facebook-transition table, th, tr, td, table th, table tr:hover{margin: 0;padding: 0;border: 0;outline: 0;font-size: 100%;background: transparent;vertical-align:top;display: table-cell;font-weight: normal;text-align: center;border-spacing:0px;}';
        echo 'div.wpfb-facebook div.wpfb-facebook-transition {margin-left: 0px;-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        echo 'div.wpfb-facebook div.wpfb-facebook-transition iframe {border:0px;overflow:hidden;position:static;height:260px;}';
        echo 'div.wpfb-facebook:hover div.wpfb-facebook-transition {margin-left: 336px;}'; 
        }
    if ($wpflybox_tabs[$i]=="twitter")
        {
        echo 'div.wpfb-twitter {width:301px;height:241px;top:'.$wpflybox_pos[$i].';left:-269px;position:fixed;z-index:900;}';
        echo 'div.wpfb-twitter-transition table, th, tr, td, table th, table tr:hover{margin: 0;padding: 0;border: 0;outline: 0;font-size: 100%;background: transparent;vertical-align:top;display: table-cell;font-weight: normal;text-align: center;border-spacing:0px;}';
        echo 'div.wpfb-twitter div.wpfb-twitter-transition {margin-left: 0px;-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        echo 'div.wpfb-twitter:hover div.wpfb-twitter-transition {margin-left: 301px;}';  
        }
    if ($wpflybox_tabs[$i]=="googleplus")
        {
        echo 'div.wpfb-googleplus {width:361px;height:154px;top:'.$wpflybox_pos[$i].';left:-329px;position:fixed;z-index:900;}';
        echo 'div.wpfb-googleplus-transition table, th, tr, td, table th, table tr:hover{margin: 0;padding: 0;border: 0;outline: 0;font-size: 100%;background: transparent;vertical-align:top;display: table-cell;font-weight: normal;text-align: center;border-spacing:0px;}';
        echo 'div.wpfb-googleplus div.wpfb-googleplus-transition {margin-left:0;-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        echo 'div.wpfb-googleplus div.wpfb-googleplus-transition iframe {border:0px;overflow:hidden;position:static;}';
        echo 'div.wpfb-googleplus:hover div.wpfb-googleplus-transition {margin-left: 361px;}'; 
        }
    if ($wpflybox_tabs[$i]=="youtube")
        {        
        echo 'div.wpfb-youtube {width:336px;height:110px;top:'.$wpflybox_pos[$i].';left:-304px;position:fixed;z-index:900;}';
        echo 'div.wpfb-youtube-transition table, th, tr, td, table th, table tr:hover{margin: 0;padding: 0;border: 0;outline: 0;font-size: 100%;background: transparent;vertical-align:top;display: table-cell;font-weight: normal;text-align: center;border-spacing:0px;}';
        echo 'div.wpfb-youtube div.wpfb-youtube-transition {margin-left:0;-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        echo 'div.wpfb-youtube:hover div.wpfb-youtube-transition {margin-left: 336px;}';
        }
    if ($wpflybox_tabs[$i]=="subscription")
        {
        echo 'div.wpfb-subscribe {width:326px;height:101px;top:'.$wpflybox_pos[$i].';left:-294px;position:fixed;z-index:900;}';
        echo 'div.wpfb-subscribe-transition table, th, tr, td, table th, table tr:hover{margin: 0;padding: 0;border: 0;outline: 0;font-size: 100%;background: transparent;vertical-align:top;display: table-cell;font-weight: normal;text-align: center;border-spacing:0px;}';
        echo 'div.wpfb-subscribe div.wpfb-subscribe-transition {margin-left:0px;-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        echo 'div.wpfb-subscribe:hover div.wpfb-subscribe-transition {margin-left: 326px;}';   
        }    
    if ($wpflybox_tabs[$i]=="pinterest")
        {     
        echo 'div.wpfb-pinterest {width:287px;height:101px;top:'.$wpflybox_pos[$i].';left:-255px;position:fixed;z-index:900;}';
        echo 'div.wpfb-pinterest-transition table, th, tr, td, table th, table tr:hover{margin: 0;padding: 0;border: 0;outline: 0;font-size: 100%;background: transparent;vertical-align:top;display: table-cell;font-weight: normal;text-align: center;border-spacing:0px;}';
        echo 'div.wpfb-pinterest div.wpfb-pinterest-transition {margin-left:0px;-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        echo 'div.wpfb-pinterest:hover div.wpfb-pinterest-transition {margin-left: 287px;}';
        }
    if ($wpflybox_tabs[$i]=="linkedin")
        {         
        echo 'div.wpfb-linkedin {width:400px;height:168px;top:'.$wpflybox_pos[$i].';left:-368px;position:fixed;z-index:900;}';
        echo 'div.wpfb-linkedin-transition table, th, tr, td, table th, table tr:hover{margin: 0;padding: 0;border: 0;outline: 0;font-size: 100%;background: transparent;vertical-align:top;display: table-cell;font-weight: normal;text-align: center;border-spacing:0px;}';
        echo 'div.wpfb-linkedin div.wpfb-linkedin-transition {margin-left:0px;-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        echo 'div.wpfb-linkedin div.wpfb-facebook-transition iframe {border:0px;overflow:hidden;position:static;height:260px;}';
        echo 'div.wpfb-linkedin:hover div.wpfb-linkedin-transition {margin-left: 400px;}';
        }
        
    $i=$i+1;    
    }
    
?>    
</style>

<div id="booie">
<?php
$i=1;
while ($i <= $wpflybox_count)
    {
    if ($wpflybox_tabs[$i]=="facebook")
        {
        ?>
        <div class="wpfb-facebook"><div class="wpfb-facebook-transition"><table><tr><th style="background-color:#fff; border: 2px solid #3c95d9;width:300px;height;260px;overflow:hidden;padding:0px;"><iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Ffacebook.com%2F<?php echo $wpflybox_facebook; ?>&amp;locale=en_GB&amp;width=245&amp;connections=10&amp;stream=&amp;header=false&amp;show_faces=0&amp;height=260" scrolling="no"></iframe></th><th valign="top"><div style="margin-left:0px; margin-top:0px; width:32px; height:101px; background-position:0px -303px; background-image:url('<?php echo $wpflybox_sprite_url; ?>');"> </div></th></tr></table></div></div>
        <?php
        }
    if ($wpflybox_tabs[$i]=="twitter")
        {
        ?>
        <div class="wpfb-twitter"><div class="wpfb-twitter-transition"><table><tr><th style="background-color:#fff; border: 2px solid #6CC5FF; width:265px; height:237px; overflow:hidden;padding:0px;"><script type="text/javascript" src="<?php echo plugins_url().'/wp-flybox/static/twitterbox.js'; ?>"></script><div id="twitterfanbox"></div><script type="text/javascript">fanbox_init("<?php echo $wpflybox_twitter; ?>");</script></th><th valign="top"><div style="margin-left:0px; margin-top:0px; width:32px; height:101px; background-position:0px -606px; background-image:url('<?php echo $wpflybox_sprite_url; ?>');"> </div></th></tr></table></div></div>
        <?php
        }
    if ($wpflybox_tabs[$i]=="googleplus")
        {
        if (get_option(wpflybox_google_type)== 'profile')
            {
            ?>    
            <div class="wpfb-googleplus"><div class="wpfb-googleplus-transition"><table><tr><th style="background-color:#fff; border: 2px solid #006ec9;width:325px; height:150px; overflow:hidden;padding:0px;"><iframe src="http://www.google.com/s2/u/0/widgets/ProfileCard?uid=<?php echo $wpflybox_google; ?>" scrolling="no"></iframe></th><th valign="top" style="padding:0px;background:none;border:0px"><div style="margin-left:0px; margin-top:0px; width:32px; height:101px; background-position:0px -404px; background-image:url('<?php echo $wpflybox_sprite_url; ?>');padding:0px;"> </div></th></tr></table></div></div>
            <?php
            } else if (get_option(wpflybox_google_type)== 'page')
            {
            ?>    
            <div class="wpfb-googleplus"><div class="wpfb-googleplus-transition"><table><tr><th style="background-color:#fff; border: 2px solid #006ec9;width:325px; height:150px; overflow:hidden;padding:0px;"><script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script><div class="g-plus" data-href="https://plus.google.com/<?php echo $wpflybox_google; ?>?rel=publisher"></div></th><th valign="top"><div style="margin-left:0px; margin-top:0px; width:32px; height:101px; background-position:0px -404px; background-image:url('<?php echo $wpflybox_sprite_url; ?>');"> </div></th></tr></table></div></div> 
            <?php    
            }   
        }
    if ($wpflybox_tabs[$i]=="youtube")
        {
        ?>
        <div class="wpfb-youtube"><div class="wpfb-youtube-transition"><table><tr><th style="background-color:#fff; border: 2px solid #ff0000; width:300px; height;105px; overflow:hidden;padding:0px;"><iframe src=http://www.youtube.com/subscribe_widget?p=<?php echo $wpflybox_youtube; ?> style="height: 105px; width: 300px; border: 0;" scrolling="no" frameBorder="0"></iframe></th><th valign="top"><div style="margin-left:px; margin-top:0px; width:32px; height:101px; background-position:0px -202px; background-image:url('<?php echo $wpflybox_sprite_url; ?>');"> </div></th></tr></table></div></div>
        <?php    
        }
    if ($wpflybox_tabs[$i]=="subscription")
        {
        ?>
        <div class="wpfb-subscribe"><div class="wpfb-subscribe-transition"><table><tr><th style="background-color:#fff; border: 2px solid #5b5b5b; width:290px; height:97px; overflow:hidden;padding:0px;"><center><p style="color:#F66303;margin-right:10px;margin-left:10px;width:270px;">Subscribe to Receive E-Mail Updates:</p> <form action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=<?php echo $wpflybox_feedburner; ?>', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true"><input gtbfieldid="10" class="enteryouremail" name="email" value="Enter Your E-Mail Here..." onblur="if (this.value == &#39;&#39;) {this.value = &#39;Enter Your E-Mail Here...&#39;;}" onfocus="if (this.value == &#39;Enter Your E-Mail Here...&#39;) {this.value = &#39;&#39;;}" type="text" /><input value="Trickstreasure" name="uri" type="hidden" /><input value="Submit" class="submitbutton" type="submit" /></form></center></th><th valign="top"><div style="margin-left:0px; margin-top:0x; width:32px; height:101px; background-position:0px 0px; background-image:url('<?php echo $wpflybox_sprite_url; ?>');"> </div></th></tr></table></div></div>
        <?php
        }    
    if ($wpflybox_tabs[$i]=="pinterest")
        {
        ?>
        <div class="wpfb-pinterest"><div class="wpfb-pinterest-transition"><table><tr><th style="background-color:#fff; border: 2px solid #f81f22; width:254px; height:98px; overflow:hidden;padding:0px;">
        <div align="center"><a href="http://pinterest.com/<?php echo $wpflybox_pinterest; ?>"><img src="http://twitterbuttons.sociableblog.com/images/pinterest-button5.png" title="Pinterest" width="250" height="60" border="0" /></a></div>
        </th><th valign="top"><div style="margin-left:0px; margin-top:0px; width:32px; height:101px; background-position:0px -101px; background-image:url('<?php echo $wpflybox_sprite_url; ?>');"> </div></th></tr></table></div></div>
        <?php
        }    
    if ($wpflybox_tabs[$i]=="linkedin")
        {
        ?>
        <div class="wpfb-linkedin"><div class="wpfb-linkedin-transition"><table><tr><th style="background-color:#fff; border: 2px solid #65b2d0; width:364px; height:159px; overflow:hidden;padding:0px;">
        <script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
        <script type="IN/MemberProfile" data-id="<?php echo $wpflybox_linkedin; ?>" data-format="inline" data-related="false" data-width="364"></script>
        </th>
        <th valign="top"><div style="margin-left:0px; margin-top:0px; width:32px; height:101px; background-position:0px -505px; background-image:url('<?php echo $wpflybox_sprite_url; ?>');"></div></th></tr></table></div></div>
        <?php
        }    
        
    $i=$i+1;    
    }
?>


</div>



<?php 
} else if (get_option(wpflybox_side)=="right"){
$wpflybox_sprite_url=plugins_url()."/wp-flybox/static/FlyBoxSpriteRight.png";
?>
<style type="text/css">
<?php
$i=1;
while ($i <= $wpflybox_count)
    {
    if ($wpflybox_tabs[$i]=="facebook")
        {
        echo 'div.wpfb-facebook {width:336px;height:264px;top:'.$wpflybox_pos[$i].';right:-304px;position:fixed;z-index:900;}';
        echo 'div.wpfb-facebook-transition table, th, tr, td, table th, table tr:hover{margin: 0;padding: 0;border: 0;outline: 0;font-size: 100%;background: transparent;vertical-align:top;display: table-cell;font-weight: normal;text-align: center;border-spacing:0px;}';
        echo 'div.wpfb-facebook div.wpfb-facebook-transition {-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        echo 'div.wpfb-facebook div.wpfb-facebook-transition iframe {border:0px;overflow:hidden;position:static;height:260px;}';
        echo 'div.wpfb-facebook:hover div.wpfb-facebook-transition {margin-left: -336px;}';  
        }
    if ($wpflybox_tabs[$i]=="twitter")
        {
        echo 'div.wpfb-twitter {width:301px;height:241px;top:'.$wpflybox_pos[$i].';right:-269px;position:fixed;z-index:900;}';
        echo 'div.wpfb-twitter-transition table, th, tr, td, table th, table tr:hover{margin: 0;padding: 0;border: 0;outline: 0;font-size: 100%;background: transparent;vertical-align:top;display: table-cell;font-weight: normal;text-align: center;border-spacing:0px;}';
        echo 'div.wpfb-twitter div.wpfb-twitter-transition {-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        echo 'div.wpfb-twitter:hover div.wpfb-twitter-transition {margin-left: -301px;}';  
        }
    if ($wpflybox_tabs[$i]=="googleplus")
        {
        echo 'div.wpfb-googleplus {width:361px;height:154px;top:'.$wpflybox_pos[$i].';right:-329px;position:fixed;z-index:900;}';
        echo 'div.wpfb-googleplus-transition table, th, tr, td, table th, table tr:hover{margin: 0;padding: 0;border: 0;outline: 0;font-size: 100%;background: transparent;vertical-align:top;display: table-cell;font-weight: normal;text-align: center;border-spacing:0px;}';
        echo 'div.wpfb-googleplus div.wpfb-googleplus-transition {-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        echo 'div.wpfb-googleplus:hover div.wpfb-googleplus-transition {margin-left: -361px;}';
        echo 'div.wpfb-googleplus div.wpfb-googleplus-transition iframe {border:0px;overflow:hidden;position:static;}';
        }
    if ($wpflybox_tabs[$i]=="youtube")
        {        
        echo 'div.wpfb-youtube {width:336px;height:110px;top:'.$wpflybox_pos[$i].';right:-304px;position:fixed;z-index:900;}';
        echo 'div.wpfb-youtube-transition table, th, tr, td, table th, table tr:hover{margin: 0;padding: 0;border: 0;outline: 0;font-size: 100%;background: transparent;vertical-align:top;display: table-cell;font-weight: normal;text-align: center;border-spacing:0px;}';
        echo 'div.wpfb-youtube div.wpfb-youtube-transition {-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        echo 'div.wpfb-youtube:hover div.wpfb-youtube-transition {margin-left: -336px;}';
        }
    if ($wpflybox_tabs[$i]=="subscription")
        {
        echo 'div.wpfb-subscribe {width:326px;height:101px;top:'.$wpflybox_pos[$i].';right:-294px;position:fixed;z-index:900;}';
        echo 'div.wpfb-subscribe-transition table, th, tr, td, table th, table tr:hover{margin: 0;padding: 0;border: 0;outline: 0;font-size: 100%;background: transparent;vertical-align:top;display: table-cell;font-weight: normal;text-align: center;border-spacing:0px;}';
        echo 'div.wpfb-subscribe div.wpfb-subscribe-transition {-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        echo 'div.wpfb-subscribe:hover div.wpfb-subscribe-transition {margin-left: -326px;}';   
        }    
    if ($wpflybox_tabs[$i]=="pinterest")
        {     
        echo 'div.wpfb-pinterest {width:287px;height:101px;top:'.$wpflybox_pos[$i].';right:-255px;position:fixed;z-index:900;}';
        echo 'div.wpfb-pinterest-transition table, th, tr, td, table th, table tr:hover{margin: 0;padding: 0;border: 0;outline: 0;font-size: 100%;background: transparent;vertical-align:top;display: table-cell;font-weight: normal;text-align: center;border-spacing:0px;}';
        echo 'div.wpfb-pinterest div.wpfb-pinterest-transition {-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        echo 'div.wpfb-pinterest:hover div.wpfb-pinterest-transition {margin-left: -287px;}';
        }
    if ($wpflybox_tabs[$i]=="linkedin")
        {         
        echo 'div.wpfb-linkedin {width:400px;height:168px;top:'.$wpflybox_pos[$i].';right:-368px;position:fixed;z-index:900;}';
        echo 'div.wpfb-linkedin-transition table, th, tr, td, table th, table tr:hover{margin: 0;padding: 0;border: 0;outline: 0;font-size: 100%;background: transparent;vertical-align:top;display: table-cell;font-weight: normal;text-align: center;border-spacing:0px;}';
        echo 'div.wpfb-linkedin div.wpfb-linkedin-transition {-webkit-transition: margin-left 0.5s linear;-moz-transition: margin-left 0.5s linear;-o-transition: margin-left 0.5s linear;-ms-transition: margin-left 0.5s linear;transition: margin-left 0.5s linear;}';
        echo 'div.wpfb-linkedin:hover div.wpfb-linkedin-transition {margin-left: -400px;}';
        echo 'div.wpfb-linkedin div.wpfb-facebook-transition iframe {border:0px;overflow:hidden;position:static;height:260px;}';
        }
        
    $i=$i+1;    
    }
    
?>  
</style>


<div id="booie">
<?php
$i=1;
while ($i <= $wpflybox_count)
    {
    if ($wpflybox_tabs[$i]=="facebook")
        {
        ?>
        <div class="wpfb-facebook"><div class="wpfb-facebook-transition"><table><tr><th valign="top" ><div style="margin-right:0px; margin-top:0px; width:32px; height:101px; background-position:0px -303px; background-image:url('<?php echo $wpflybox_sprite_url; ?>')"> </div></th><th style="background-color:#fff; border: 2px solid #3c95d9;width:300px;height;260px;overflow:hidden;"><iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Ffacebook.com%2F<?php echo $wpflybox_facebook; ?>&amp;locale=en_GB&amp;width=245&amp;connections=10&amp;stream=&amp;header=false&amp;show_faces=0&amp;height=260" scrolling="no"></iframe></th></th></tr></table></div></div>
        <?php
        }
    if ($wpflybox_tabs[$i]=="twitter")
        {
        ?>
        <div class="wpfb-twitter"><div class="wpfb-twitter-transition"><table><tr><th valign="top"><div style="margin-right:0px; margin-top:0px; width:32px; height:101px; background-position:0px -606px; background-image:url('<?php echo $wpflybox_sprite_url; ?>')"> </div></th><th style="background-color:#fff; border: 2px solid #6CC5FF;width:265px; height:237px; overflow:hidden;"><script type="text/javascript" src="<?php echo plugins_url().'/wp-flybox/static/twitterbox.js'; ?>"></script><div id="twitterfanbox"></div><script type="text/javascript">fanbox_init("<?php echo $wpflybox_twitter; ?>");</script></th></th></tr></table></div></div>
        <?php
        }
    if ($wpflybox_tabs[$i]=="googleplus")
        {
        if (get_option(wpflybox_google_type)== 'profile')
            {
            ?>    
            <div class="wpfb-googleplus"><div class="wpfb-googleplus-transition"><table><tr><th valign="top"><div style="margin-right:0px; margin-top:0px; width:32px; height:101px; background-position:0px -404px; background-image:url('<?php echo $wpflybox_sprite_url; ?>')"> </div></th><th style="background-color:#fff; border: 2px solid #006ec9;width:325px;height:150px; overflow:hidden;"><iframe src="http://www.google.com/s2/u/0/widgets/ProfileCard?uid=<?php echo $wpflybox_google; ?>" width="100%" height="125px" scrolling="no" style="border:0px;"></iframe></th></tr></table></div></div>
            <?php
            } else if (get_option(wpflybox_google_type)== 'page')
            {
            ?>    
            <div class="wpfb-googleplus"><div class="wpfb-googleplus-transition"><table><tr><th valign="top"><div style="margin-right:0px; margin-top:0px; width:32px; height:101px; background-position:0px -404px; background-image:url('<?php echo $wpflybox_sprite_url; ?>')"> </div></th><th style="background-color:#fff; border: 2px solid #006ec9;width:325px;height:150px; overflow:hidden;"><script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script><div class="g-plus" data-href="https://plus.google.com/<?php echo $wpflybox_google; ?>?rel=publisher"></div></th></tr></table></div></div>
            <?php    
            }   
        }
    if ($wpflybox_tabs[$i]=="youtube")
        {
        ?>
        <div class="wpfb-youtube"><div class="wpfb-youtube-transition"><table><tr><th valign="top"><div style="margin-right:0px; margin-top:0px; width:32px; height:101px; background-position:0px -202px; background-image:url('<?php echo $wpflybox_sprite_url; ?>')"> </div></th><th style="background-color:#fff; border: 2px solid #ff0000; width:300px; height;105px; overflow:hidden;"><iframe src=http://www.youtube.com/subscribe_widget?p=<?php echo $wpflybox_youtube; ?> style="height: 105px; width: 300px; border: 0;" scrolling="no" frameBorder="0"></iframe></th></tr></table></div></div>
        <?php    
        }
    if ($wpflybox_tabs[$i]=="subscription")
        {
        ?>
        <div class="wpfb-subscribe"><div class="wpfb-subscribe-transition"><table><tr><th valign="top"><div style="margin-right:0px; margin-top:0px; width:32px; height:101px; background-position:0px 0px; background-image:url('<?php echo $wpflybox_sprite_url; ?>')"> </div></th><th style="background-color:#fff; border: 2px solid #5b5b5b; width:290px; height:97px; overflow:hidden;"><center><p style="color:#F66303;margin-right:10px;margin-left:10px;width:270px;">Subscribe to Receive E-Mail Updates:</p> <form action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=<?php echo $wpflybox_feedburner; ?>', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true"><input gtbfieldid="10" class="enteryouremail" name="email" value="Enter Your E-Mail Here..." onblur="if (this.value == &#39;&#39;) {this.value = &#39;Enter Your E-Mail Here...&#39;;}" onfocus="if (this.value == &#39;Enter Your E-Mail Here...&#39;) {this.value = &#39;&#39;;}" type="text" /><input value="Trickstreasure" name="uri" type="hidden" /><input value="Submit" class="submitbutton" type="submit" /></form></center></th></tr></table></div></div>
        <?php
        }    
    if ($wpflybox_tabs[$i]=="pinterest")
        {
        ?>
        <div class="wpfb-pinterest"><div class="wpfb-pinterest-transition"><table><tr><th valign="top"><div style="margin-right:0px; margin-top:0px; width:32px; height:101px; background-position:0px -101px; background-image:url('<?php echo $wpflybox_sprite_url; ?>')"> </div></th><th style="background-color:#fff; border: 2px solid #f81f22; width:254px; height:98px; overflow:hidden;">
        <div align="center"><a href="http://pinterest.com/<?php echo $wpflybox_pinterest; ?>"><img src="http://twitterbuttons.sociableblog.com/images/pinterest-button5.png" title="Pinterest" width="250" height="60" border="0" /></a></div>
        </th></tr></table></div></div>
        <?php
        }    
    if ($wpflybox_tabs[$i]=="linkedin")
        {
        ?>
        <div class="wpfb-linkedin"><div class="wpfb-linkedin-transition"><table><tr><th valign="top"><div style="margin-right:0px; margin-top:0px; width:32px; height:101px; background-position:0px -505px; background-image:url('<?php echo $wpflybox_sprite_url; ?>')"> </div></th><th style="background-color:#fff; border: 2px solid #4875B4; width:364px; height:159px; overflow:hidden;">
        <script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
        <script type="IN/MemberProfile" data-id="<?php echo $wpflybox_linkedin; ?>" data-format="inline" data-related="false" data-width="364"></script>
        </th></tr></table></div></div>
        <?php
        }    
        
    $i=$i+1;    
    }
?>    
    
    
</div>

<?php 
}
?>









