<?php
echo '<div class="wpfb-subscribe" id="wpfb-subscribe">
        <div class="wpfb-subscribe-transition">
          <table class="wpflyboxtable">
            <tr style="background:transparent">';
if (get_option(wpflybox_side)=="right")
  {
  echo '<th style="vertical-align:top">';
  if (get_option(wpflybox_usecustombutton) == "true")
    {
    echo '<a class="wpflybox_button" href="#"><img src="'.WP_PLUGIN_URL.'/wp-flybox/static/icons/subscription.png" height="30" alt="S"></a>';
    } else {
    echo'<a href="#"><div style="margin-left:0px; margin-top:0px; width:33px; height:101px; background-position:0px 0px; background-image:url(\''.WP_PLUGIN_URL.'/wp-flybox/static/FlyBoxSpriteRight.png\');padding:0px;"> </div></a>';
    }
    echo '</th>';
  }
echo '<th style="background-color:#fff; border: 2px solid #5b5b5b; width:290px; height:97px; overflow:hidden;padding:0px;line-height:1.5;">';
      echo '<div style="color:#F66303;margin:10px 10px 5px 10px;width:270px;font-size:14px;text-align:center">
            '.$wpl_SubscribetoReceive.':
            </div>
            <form action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open(\'http://feedburner.google.com/fb/a/mailverify?uri='.get_option(wpflybox_feedburner).'\', \'popupwindow\', \'scrollbars=yes,width=550,height=520\');return true">
            <input style="padding:2px;" class="enteryouremail" name="email" value="'.$wpl_enteremailhere.'" onblur="if (this.value == &#39;&#39;) {this.value = &#39;'.$wpl_enteremailhere.'&#39;;}" onfocus="if (this.value == &#39;'.$wpl_enteremailhere.'&#39;) {this.value = &#39;&#39;;}" type="text" />
            <input value="'.get_option(wpflybox_feedburner).'" name="uri" type="hidden" />
            <input style="padding:2px;" value="'.$wpl_Submit.'" class="submitbutton" type="submit" />
            </form>';
      echo '</th>';
if (get_option(wpflybox_side)=="left")
  {
  echo '<th style="vertical-align:top">';
  if (get_option(wpflybox_usecustombutton) == "true")
    {
    echo '<a class="wpflybox_button" href="#"><img src="'.WP_PLUGIN_URL.'/wp-flybox/static/icons/subscription.png" height="30" alt="S"></a>';
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