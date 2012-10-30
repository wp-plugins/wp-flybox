<?php
echo '<div class="wpfb-linkedin" id="wpfb-linkedin">
        <div class="wpfb-linkedin-transition">
          <table class="wpflyboxtable">
            <tr style="background:transparent">';
if (get_option(wpflybox_side)=="right")
  {
  echo '<th valign="top" >';
  if (get_option(wpflybox_usecustombutton) == "true")
    {
    echo '<a class="wpflybox_button" href="#"><img src="'.WP_PLUGIN_URL.'/wp-flybox/static/icons/linkedin.png" height="30"></a>';
    } else {
    echo'<a href="#"><div style="margin-left:0px; margin-top:0px; width:33px; height:101px; background-position:0px -505px; background-image:url(\''.WP_PLUGIN_URL.'/wp-flybox/static/FlyBoxSpriteRight.png\');padding:0px;"> </div></a>';
    }
    echo '</th>';
  }
echo '<th style="background-color:#fff; border: 2px solid #65b2d0; width:364px; height:159px; overflow:hidden;padding:0px;line-height:0.5">';
      echo '<script src="//platform.linkedin.com/in.js" type="text/javascript"></script>';
      if (get_option(wpflybox_linkedin_type)=="member")
        {
        echo '<script type="IN/MemberProfile" data-id="'.get_option(wpflybox_linkedin).'" data-format="inline" data-related="false" data-width="364"></script>';
        } else if (get_option(wpflybox_linkedin_type)=="company") 
        {
        echo '<script type="IN/CompanyProfile" data-id="'.get_option(wpflybox_linkedin).'" data-format="inline" data-related="false" data-width="364"></script>';
        }
      echo '</th>';
if (get_option(wpflybox_side)=="left")
  {
  echo '<th valign="top" >';
  if (get_option(wpflybox_usecustombutton) == "true")
    {
    echo '<a class="wpflybox_button" href="#"><img src="'.WP_PLUGIN_URL.'/wp-flybox/static/icons/linkedin.png" height="30"></a>';
    } else {
    echo'<a href="#"><div style="margin-left:0px; margin-top:0px; width:33px; height:101px; background-position:0px -505px; background-image:url(\''.WP_PLUGIN_URL.'/wp-flybox/static/FlyBoxSpriteLeft.png\');padding:0px;"> </div></a>';
    }
    echo '</th>';
  }
echo '</tr>
      </table>
      </div>
      </div>';
      
?>