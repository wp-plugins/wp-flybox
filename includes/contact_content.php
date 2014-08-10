<?php
$wpflybox_contactencrypted = base64_encode(get_option('wpflybox_contactemail'));
echo '<div style="text-align:center;padding-top:8px;display:inline-block;background-color:'.get_option('wpflybox_contact_background').';border:1px solid '.get_option('wpflybox_contact_border').';display:inline-block"><b>Contact '; 
if (get_option('wpflybox_contactwho') == "us"){echo 'Us';} else {echo 'Me';}
echo ':</b><br><form style="padding:5px;" action="'.WP_PLUGIN_URL.'/wp-flybox/contact.php" method="post" target="popupwindow" onsubmit="window.open(\''.WP_PLUGIN_URL.'/wp-flybox/contact.php\', \'popupwindow\', \'scrollbars=no,width=300,height=300\');return true">
  <p>'.$wpl_Name.': <input style="padding:1px;" class="enteryourname" name="name" id="name" type="text" /></p>
  <p>'.$wpl_Email.': <input style="padding:1px;" class="enteryouremail" name="email" id="email" type="text" /></p>
  <p><textarea rows="2" cols="30" class="enteryourmessage" name="message" id="message">'.$wpl_EnterYourMessage.'</textarea></p>';
    if (get_option('wpflybox_captcha')=="true"){ 
    $wpflybox_code= rand(1000,99999);
  echo '<input value="'.$wpflybox_code.'" name="hiddencode" id="hiddencode" type="hidden" />
  <p><img src="'.WP_PLUGIN_URL.'/wp-flybox/static/securityimage/security-image.php?width=200&amp;code='.$wpflybox_code.'" width="200" height="40" alt="Verification Image" /></p>
  <p>'.$wpl_EnterNumberFrom.':<br /><input style="padding:1px;" class="entercaptcha" name ="security_code" id="security_code" type="text" /></p>';
     }  
  echo '<input value="'.$wpflybox_contactencrypted.'" name="sendtoemail" id="sendtoemail" type="hidden" />      
  <p><input style="padding:2px;" value="'.$wpl_Submit.'" class="submitbutton" type="submit" /></p></form></div>';
?>