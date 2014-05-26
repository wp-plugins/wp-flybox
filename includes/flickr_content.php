<?php
//echo '<div style="overflow:hidden;">';
echo '<div style="background-color:'.get_option('wpflybox_flickr_background').'; overflow:hidden; width:113px; height:151px; overflow:hidden;border:1px solid '.get_option('wpflybox_flickr_border').';display:inline-block;">
<iframe scrollbars="no" style="background-color:'.get_option('wpflybox_flickr_background').'; border:none; width:113px; height:151px; overflow:hidden;" src="http://www.flickr.com/apps/badge/badge_iframe.gne?zg_bg_color='.str_replace("#","",get_option('wpflybox_flickr_background')).'&amp;zg_person_id='.get_option('wpflybox_flickr').'&amp;zg_tags='.get_option('wpflybox_flickr_tag').'&amp;zg_tag_mode=any" title="Flickr Badge"></iframe>
</div>';
//echo '</div>';
?>