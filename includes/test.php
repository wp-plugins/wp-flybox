<?php
$jk = file_get_contents('http://api.twitter.com/1/users/lookup.json?screen_name=wordpress');
$jk = json_decode($jk);
var_dump($jk);
echo count($jk->ids);
if ($jk->ids[0] > 0){echo 'yea';}
?>