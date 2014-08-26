<?php
echo '<div style="background-color:'.get_option('wpflybox_youtube_background').'; overflow:hidden; width:300px; height:99px;border:1px solid '.get_option('wpflybox_youtube_border').';display:inline-block;">
<iframe src="https://www.youtube.com/subscribe_widget?p='.get_option('wpflybox_youtube').'" style="height: 99px; width: 300px; border:none; overflow:hidden; background-color:'.get_option('wpflybox_youtube_background').'"></iframe>
</div>';
?>