<?php
$fb_width=get_option('wpflybox_facebook_width');
$fb_height=get_option('wpflybox_facebook_height');
$fb_color=get_option('wpflybox_facebook_color');
$show_faces=get_option('wpflybox_facebook_showfaces');
$show_stream=get_option('wpflybox_facebook_stream');
$show_header=get_option('wpflybox_facebook_header');
$link=get_option('wpflybox_facebook');
echo '<div style="background-color:'.get_option('wpflybox_facebook_background').'; overflow:hidden; width:'.$fb_width.'px; height:'.$fb_height.'px;border:1px solid '.get_option('wpflybox_facebook_border').';display:inline-block;">
<iframe title="Facebook" src="https://www.facebook.com/plugins/likebox.php?href='.urlencode($link).'&amp;width='.$fb_width.'&amp;height='.$fb_height.'&amp;colorscheme='.$fb_color.'&amp;show_faces='.$show_faces.'&amp;stream='.$show_stream.'&amp;header='.$show_header.'" style="border:none;width:'.$fb_width.'px; height:'.$fb_height.'px;background-color:'.get_option('wpflybox_facebook_background').';">iframes not supported by your browser.</iframe>
</div>';
?>