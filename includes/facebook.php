<?php
echo '<div class="wpfb-facebook" id="wpfb-facebook">
        <div class="wpfb-facebook-transition">
          <table class="wpflyboxtable">
            <tr style="background:transparent">';
if (get_option(wpflybox_side)=="right")
  {
  echo '<th valign="top" >';
  if (get_option(wpflybox_usecustombutton) == "true")
    {
    echo '<a class="wpflybox_button" href="#"><img src="'.WP_PLUGIN_URL.'/wp-flybox/static/icons/facebook.png" height="30"></a>';
    } else {
    echo'<a href="#"><div style="margin-left:0px; margin-top:0px; width:33px; height:101px; background-position:0px -303px; background-image:url(\''.WP_PLUGIN_URL.'/wp-flybox/static/FlyBoxSpriteRight.png\');padding:0px;"> </div></a>';
    }
    echo '</th>';
  }
echo '<th style="background-color:#fff; border: 2px solid #3c95d9;width:292px;overflow:hidden;padding:0px;">';
      echo '<iframe src="https://www.facebook.com/plugins/likebox.php?href='.get_option(wpflybox_facebook).'&amp;locale=en_GB&amp;width='.get_option(wpflybox_facebook_width).'&amp;height='.get_option(wpflybox_facebook_height).'&amp;colorscheme='.get_option(wpflybox_facebook_color).'&amp;show_faces='.get_option(wpflybox_facebook_showfaces).'&amp;stream='.get_option(wpflybox_facebook_stream).'&amp;header='.get_option(wpflybox_facebook_header).'" scrolling="no" frameborder="0" width="200px" style="border:none; overflow:hidden; width:292px; height:'.get_option(wpflybox_facebook_height).'px;" allowTransparency="true"></iframe>';
      echo '</th>';
if (get_option(wpflybox_side)=="left")
  {
  echo '<th valign="top" >';
  if (get_option(wpflybox_usecustombutton) == "true")
    {
    echo '<a class="wpflybox_button" href="#"><img src="'.WP_PLUGIN_URL.'/wp-flybox/static/icons/facebook.png" height="30"></a>';
    } else {
    echo'<a href="#"><div style="margin-left:0px; margin-top:0px; width:33px; height:101px; background-position:0px -303px; background-image:url(\''.WP_PLUGIN_URL.'/wp-flybox/static/FlyBoxSpriteLeft.png\');padding:0px;"> </div></a>';
    }
    echo '</th>';
  }
echo '</tr>
      </table>
      </div>
      </div>';
      
?>