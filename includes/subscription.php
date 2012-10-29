<?php
echo '<div class="wpfb-subscribe" id="wpfb-subscribe">
        <div class="wpfb-subscribe-transition">
          <table class="wpflyboxtable">
            <tr style="background:transparent">';
if (get_option(wpflybox_side)=="right")
  {
  echo '<th valign="top" >';
  if (get_option(wpflybox_usecustombutton) == "true")
    {
    echo '<a class="wpflybox_button" href="#"><img src="'.WP_PLUGIN_URL.'/wp-flybox/static/icons/subscription.png" height="30"></a>';
    } else {
    echo'<a href="#"><div style="margin-left:0px; margin-top:0px; width:33px; height:101px; background-position:0px 0px; background-image:url(\''.WP_PLUGIN_URL.'/wp-flybox/static/FlyBoxSpriteRight.png\');padding:0px;"> </div></a>';
    }
    echo '</th>';
  }
echo '<th style="background-color:#fff; border: 2px solid #5b5b5b; width:290px; height:97px; overflow:hidden;padding:0px;">';
      echo '<center>
            <p style="color:#F66303;margin-right:10px;margin-left:10px;width:270px;font-size:14px;">
            Subscribe to Receive E-Mail Updates:
            </p>
            <form action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open(\'http://feedburner.google.com/fb/a/mailverify?uri='.get_option(wpflybox_feedburner).'\', \'popupwindow\', \'scrollbars=yes,width=550,height=520\');return true">
            <input style="padding:2px;" gtbfieldid="10" class="enteryouremail" name="email" value="Enter Your E-Mail Here..." onblur="if (this.value == &#39;&#39;) {this.value = &#39;Enter Your E-Mail Here...&#39;;}" onfocus="if (this.value == &#39;Enter Your E-Mail Here...&#39;) {this.value = &#39;&#39;;}" type="text" />
            <input value="'.get_option(wpflybox_feedburner).'" name="uri" type="hidden" />
            <input style="padding:2px;" value="Submit" class="submitbutton" type="submit" />
            </form>
            </center>';
      echo '</th>';
if (get_option(wpflybox_side)=="left")
  {
  echo '<th valign="top" >';
  if (get_option(wpflybox_usecustombutton) == "true")
    {
    echo '<a class="wpflybox_button" href="#"><img src="'.WP_PLUGIN_URL.'/wp-flybox/static/icons/subscription.png" height="30"></a>';
    } else {
    echo'<a href="#"><div style="margin-left:0px; margin-top:0px; width:33px; height:101px; background-position:0px 0px; background-image:url(\''.WP_PLUGIN_URL.'/wp-flybox/static/FlyBoxSpriteLeft.png\');padding:0px;"> </div></a>';
    }
    echo '</th>';
  }
echo '</tr>
      </table>
      </div>
      </div>';
      
?>