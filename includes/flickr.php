<?php 
echo '<div class="wpfb-flickr" id="wpfb-flickr">
        <div class="wpfb-flickr-transition">
          <table class="wpflyboxtable">
            <tr style="background:transparent;">';
if (get_option(wpflybox_side)=="right")
  {
  echo '<th style="vertical-align:top">';
  if (get_option(wpflybox_usecustombutton) == "true")
    {
    echo '<a class="wpflybox_button" href="#"><img src="'.WP_PLUGIN_URL.'/wp-flybox/static/icons/flickr.png" height="30" alt="F"></a>';
    } else {
    echo'<a href="#"><div style="margin-left:0px; margin-top:0px; width:33px; height:101px; background-position:0px -808px; background-image:url(\''.WP_PLUGIN_URL.'/wp-flybox/static/FlyBoxSpriteRight.png\');padding:0px;"> </div></a>';
    }
    echo '</th>';
  }
      echo '<th style="background-color:#fff; border: 2px solid #0063DC;overflow:hidden;padding:0px;width:113px;line-height:0.6;">';
      echo '<iframe style="background-color:#ffffff; border-color:#ffffff; border:none; width:113px; overflow:hidden;" src="https://www.flickr.com/apps/badge/badge_iframe.gne?zg_bg_color=ffffff&amp;zg_person_id='.get_option(wpflybox_flickr).'&amp;zg_tags='.get_option(wpflybox_flickr_tag).'&amp;zg_tag_mode=any" title="Flickr Badge"></iframe>';
      echo '</th>';
if (get_option(wpflybox_side)=="left")
  {
  echo '<th style="vertical-align:top">';
  if (get_option(wpflybox_usecustombutton) == "true")
    {
    echo '<a class="wpflybox_button" href="#"><img src="'.WP_PLUGIN_URL.'/wp-flybox/static/icons/flickr.png" height="30" alt="F"></a>';
    } else {
    echo'<a href="#"><div style="margin-left:0px; margin-top:0px; width:33px; height:101px; background-position:0px -808px; background-image:url(\''.WP_PLUGIN_URL.'/wp-flybox/static/FlyBoxSpriteLeft.png\');padding:0px;"> </div></a>';
    }
    echo '</th>';
  }
echo '</tr>
      </table>
      </div>
      </div>';
      
?>