<?php
echo '<div class="wpfb-googleplus" id="wpfb-googleplus">
        <div class="wpfb-googleplus-transition">
          <table class="wpflyboxtable">
            <tr style="background:transparent">';
if (get_option(wpflybox_side)=="right")
  {
  echo '<th style="vertical-align:top">';
  if (get_option(wpflybox_usecustombutton) == "true")
    {
    echo '<a class="wpflybox_button" href="#"><img src="'.WP_PLUGIN_URL.'/wp-flybox/static/icons/googleplus.png" height="30" alt="G"></a>';
    } else {
    echo'<a href="#"><div style="margin-left:0px; margin-top:0px; width:33px; height:101px; background-position:0px -404px; background-image:url(\''.WP_PLUGIN_URL.'/wp-flybox/static/FlyBoxSpriteRight.png\');padding:0px;"> </div></a>';
    }
    echo '</th>';
  }
      echo '<th style="background-color:#fff; border: 2px solid #006ec9;width:325px;overflow:hidden;padding:0px;padding-top:12px;">';
      if (get_option(wpflybox_google_type)== 'profile')
            {
            echo '<iframe src="http://www.google.com/s2/u/0/widgets/ProfileCard?uid='.get_option(wpflybox_google).'" scrolling="no"></iframe>'; 
            } else if (get_option(wpflybox_google_type)== 'page')
            {
            echo '<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script><div class="g-plus" data-href="https://plus.google.com/'.get_option(wpflybox_google).'?rel=publisher"></div>';
            }
      echo '</th>';
if (get_option(wpflybox_side)=="left")
  {
  echo '<th style="vertical-align:top">';
  if (get_option(wpflybox_usecustombutton) == "true")
    {
    echo '<a class="wpflybox_button" href="#"><img src="'.WP_PLUGIN_URL.'/wp-flybox/static/icons/googleplus.png" height="30" alt="G"></a>';
    } else {
    echo'<a href="#"><div style="margin-left:0px; margin-top:0px; width:33px; height:101px; background-position:0px -404px; background-image:url(\''.WP_PLUGIN_URL.'/wp-flybox/static/FlyBoxSpriteLeft.png\');padding:0px;"> </div></a>';
    }
    echo '</th>';
  }
echo '</tr>
      </table>
      </div>
      </div>';
      
?>