<?php
if (get_option(wpflybox_contactwho) == "us"){$wpflybox_contactwhopixel="1111";} else {$wpflybox_contactwhopixel="707";}
$wpflybox_contactencrypted = base64_encode(get_option(wpflybox_contactemail)); 
echo '<div class="wpfb-contact" id="wpfb-contact">
        <div class="wpfb-contact-transition">
          <table class="wpflyboxtable">
            <tr style="background:transparent">';
if (get_option(wpflybox_side)=="right")
  {
  echo '<th valign="top" >';
  if (get_option(wpflybox_usecustombutton) == "true")
    {
    echo '<a class="wpflybox_button" href="#"><img src="'.WP_PLUGIN_URL.'/wp-flybox/static/icons/contact.png" height="30"></a>';
    } else {
    echo'<a href="#"><div style="margin-left:0px; margin-top:0px; width:33px; height:101px; background-position:0px -'.$wpflybox_contactwhopixel.'px; background-image:url(\''.WP_PLUGIN_URL.'/wp-flybox/static/FlyBoxSpriteRight.png\');padding:0px;"> </div></a>';
    }
    echo '</th>';
  }
echo '<th style="background-color:#fff; border: 2px solid #2653a1; width:280px; overflow:hidden;padding:0px;">';
      echo '<div style="text-align:center;padding-top:8px;"><b>Contact '; 
      if (get_option(wpflybox_contactwho) == "us"){echo 'Us';} else {echo 'Me';}
      echo ':</b><br><form style="padding:5px;" action="'.WP_PLUGIN_URL.'/wp-flybox/contact.php";" method="post" target="popupwindow" onsubmit="window.open(\''.WP_PLUGIN_URL.'/wp-flybox/contact.php\', \'popupwindow\', \'scrollbars=no,width=300,height=300\');return true">
        <p>Name: <input style="padding:1px;" gtbfieldid="10" class="enteryourname" name="name" id="name" type="text" /></p>
        <p>Email: <input style="padding:1px;" gtbfieldid="10" class="enteryouremail" name="email" id="email" type="text" /></p>
        <p><textarea rows="2" cols="30" class="enteryourmessage" name="message" id="message">Enter Your Message Here...</textarea></p>';
          if (get_option(wpflybox_captcha)=="true"){ 
          $wpflybox_code= rand(1000,99999);

        echo '<input value="'.$wpflybox_code.'" name="hiddencode" id="hiddencode" type="hidden" />
        <p><img src="'.WP_PLUGIN_URL.'/wp-flybox/static/securityimage/security-image.php?width=200&code='.$wpflybox_code.'" width="200" height="40" alt="Verification Image" /></p>
        <p>Enter number from above:<br /><input style="padding:1px;" gtbfieldid="10" class="entercaptcha" name ="security_code" id="security_code" type="text" /></p>';
           }  
        echo '<input value="'.$wpflybox_contactencrypted.'" name="sendtoemail" id="sendtoemail" type="hidden" />      
        <p><input style="padding:2px;" value="Submit" class="submitbutton" type="submit" /></p></form></div>';
      echo '</th>';
if (get_option(wpflybox_side)=="left")
  {
  echo '<th valign="top" >';
  if (get_option(wpflybox_usecustombutton) == "true")
    {
    echo '<a class="wpflybox_button" href="#"><img src="'.WP_PLUGIN_URL.'/wp-flybox/static/icons/contact.png" height="30"></a>';
    } else {
    echo'<a href="#"><div style="margin-left:0px; margin-top:0px; width:33px; height:101px; background-position:0px -'.$wpflybox_contactwhopixel.'px; background-image:url(\''.WP_PLUGIN_URL.'/wp-flybox/static/FlyBoxSpriteLeft.png\');padding:0px;"> </div></a>';
    }
    echo '</th>';
  }
echo '</tr>
      </table>
      </div>
      </div>';
      
?>