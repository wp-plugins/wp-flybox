<?php
$click_or_hover=get_option('wpflybox_hoverorclick');
$number_of_tabs=get_option('wpflybox_count');
$right_or_left=get_option('wpflybox_side');
if ($right_or_left=='left'){$opposite_right_or_left='right';}else{$opposite_right_or_left='left';}
$tab_width=33;
if (get_option('wpflybox_usecustombutton') == "true")
  {
  echo '<style type="text/css">';
  $wpflybox_bgtopgradient=get_option('wpflybox_bgtopgradient');		
  $wpflybox_bgbottomgradient=get_option('wpflybox_bgbottomgradient');       			
  $wpflybox_bgborder=get_option('wpflybox_bgborder');
  $wpflybox_side=get_option('wpflybox_side');
if ($wpflybox_side=='right')
  {
  $wpflybox_side_operator = '-';
  } else {
  $wpflybox_side_operator = '';
  }
  echo '.wpflybox_button img{
   border-top: 1px solid #'.$wpflybox_bgborder.';';
   if ($wpflybox_side=='left')
    {
    echo 'border-right: 1px solid #'.$wpflybox_bgborder.';';
    } else {
    echo 'border-left: 1px solid #'.$wpflybox_bgborder.';';
    }
   echo 'direction:ltr;
   border-bottom: 1px solid #'.$wpflybox_bgborder.';
   background: #000000;
   background: -webkit-gradient(linear, right top, left top, from(#'.$wpflybox_bgtopgradient.'), to(#'.$wpflybox_bgbottomgradient.'));
   background: -webkit-linear-gradient(right, #'.$wpflybox_bgtopgradient.', #'.$wpflybox_bgbottomgradient.');
   background: -moz-linear-gradient(right, #'.$wpflybox_bgtopgradient.', #'.$wpflybox_bgbottomgradient.');
   background: -ms-linear-gradient(right, #'.$wpflybox_bgtopgradient.', #'.$wpflybox_bgbottomgradient.');
   background: -o-linear-gradient(right, #'.$wpflybox_bgtopgradient.', #'.$wpflybox_bgbottomgradient.');
   background: linear-gradient(to right, #'.$wpflybox_bgtopgradient.', #'.$wpflybox_bgbottomgradient.');
   filter: progid:DXImageTransform.Microsoft.gradient(GradientType=1,startColorstr=\'#'.$wpflybox_bgtopgradient.'\', endColorstr=\'#'.$wpflybox_bgbottomgradient.'\');
   -ms-filter: "progid:DXImageTransform.Microsoft.gradient(GradientType=1,startColorstr=\'#'.$wpflybox_bgtopgradient.'\', endColorstr=\'#'.$wpflybox_bgbottomgradient.'\')"; 
   display:block;
   height:32px;
   width: 32px;
   margin: 0px;
   padding: 0px;';
   if ($wpflybox_side=='left')
    {
    echo '-webkit-border-radius: 0px 9px 9px 0px;
   -moz-border-radius: 0px 9px 9px 0px;
   border-radius: 0px 9px 9px 0px;';
   } else {
   echo '-webkit-border-radius: 9px 0px 0px 9px;
   -moz-border-radius: 9px 0px 0px 9px;
   border-radius: 9px 0px 0px 9px;';
   }
   echo 'color: #ffffff;
   font-size: 10px;
   font-family: Georgia, serif;
   text-decoration: none;
   vertical-align: middle;
   z-index:999999;
   }
  .wpflybox_button img{
   padding:0px;
   }
   .wpflybox_button img:hover {';
   if ($wpflybox_side=='left')
    {
    echo '-webkit-border-radius: 0px 9px 9px 0px;
   -moz-border-radius: 0px 9px 9px 0px;
   border-radius: 0px 9px 9px 0px;';
   } else {
   echo '-webkit-border-radius: 9px 0px 0px 9px;
   -moz-border-radius: 9px 0px 0px 9px;
   border-radius: 9px 0px 0px 9px;';
   } 
   echo '   border-top: 1px solid #'.$wpflybox_bgborder.';';
   if ($wpflybox_side=='left')
    {
    echo 'border-right: 1px solid #'.$wpflybox_bgborder.';';
    } else {
    echo 'border-left: 1px solid #'.$wpflybox_bgborder.';';
    }echo 'border-bottom: 1px solid #'.$wpflybox_bgborder.';
   direction:ltr;
   padding:0px;   
   background: #000000;
   background: -webkit-gradient(linear, right top, left top, from(#'.$wpflybox_bgtopgradient.'), to(#'.$wpflybox_bgbottomgradient.'));
   background: -webkit-linear-gradient(right, #'.$wpflybox_bgtopgradient.', #'.$wpflybox_bgbottomgradient.');
   background: -moz-linear-gradient(right, #'.$wpflybox_bgtopgradient.', #'.$wpflybox_bgbottomgradient.');
   background: -ms-linear-gradient(right, #'.$wpflybox_bgtopgradient.', #'.$wpflybox_bgbottomgradient.');
   background: -o-linear-gradient(right, #'.$wpflybox_bgtopgradient.', #'.$wpflybox_bgbottomgradient.');
   background: linear-gradient(to right, #'.$wpflybox_bgtopgradient.', #'.$wpflybox_bgbottomgradient.');
   filter: progid:DXImageTransform.Microsoft.gradient(GradientType=1,startColorstr=\'#'.$wpflybox_bgtopgradient.'\', endColorstr=\'#'.$wpflybox_bgbottomgradient.'\');
   -ms-filter: "progid:DXImageTransform.Microsoft.gradient(GradientType=1,startColorstr=\'#'.$wpflybox_bgtopgradient.'\', endColorstr=\'#'.$wpflybox_bgbottomgradient.'\')";   
   color: #000000;
   }';
  echo '</style>';
  }
?>
<script>
var tab_width=<?php echo $tab_width; ?>;
<?php
$i=1;
while ($i<=$number_of_tabs)
  {
  ?>
  var tab<?php echo $i; ?>_pos=0;
  <?php
  $i++;
  }
?>
jQuery(document).ready(function(){
<?php
$i=1;
//move tabs to edge
while($i<=$number_of_tabs)
  {
  ?>
  var i_width=jQuery("#tab<?php echo $i; ?>").width()-tab_width;
  i_width='-'+i_width+'px';
  document.getElementById('tab<?php echo $i; ?>').style.<?php echo $right_or_left; ?>=i_width;
  <?php
  $i++;
  }
//click/hover jquery function
$i=1;
if ($click_or_hover=='click')
{
while ($i<=$number_of_tabs)
  {
  ?>
  jQuery("#tab<?php echo $i; ?> .wpflybox_button").click(function(){
    if(tab<?php echo $i; ?>_pos==0)
      {
      jQuery("#tab<?php echo $i; ?>").animate({<?php echo $right_or_left; ?>:'0px'});
      <?php
      $j=1;
      while ($j<=$number_of_tabs)
        {
        if ($j!=$i)
          {
          ?>
          var j_width=jQuery("#tab<?php echo $j; ?>").width()-tab_width;
          j_width='-'+j_width;
          jQuery("#tab<?php echo $j; ?>").animate({<?php echo $right_or_left; ?>:j_width});
          <?php
          }
        $j++;
        }
      $j=1;
      while ($j<=$number_of_tabs)
        {
        ?>
        tab<?php echo $j; ?>_pos=0;
        <?php
        $j++;
        }
        ?>
      tab<?php echo $i; ?>_pos=1;
      } else {     
      var i_width=jQuery("#tab<?php echo $i; ?>").width()-tab_width;
      i_width='-'+i_width;
      jQuery("#tab<?php echo $i; ?>").animate({<?php echo $right_or_left; ?>:i_width});
      tab<?php echo $i; ?>_pos=0;
      }
  });
  <?php
  $i++;
  }
} else {
while ($i<=$number_of_tabs)
  {
  ?>
  jQuery("#tab<?php echo $i; ?>").hover(function(){
    if(tab<?php echo $i; ?>_pos==0)
      {
      jQuery("#tab<?php echo $i; ?>").animate({<?php echo $right_or_left; ?>:'0px'});
      <?php
      $j=1;
      while ($j<=$number_of_tabs)
        {
        if ($j!=$i)
          {
          ?>
          var j_width=jQuery("#tab<?php echo $j; ?>").width()-tab_width;
          j_width='-'+j_width;
          jQuery("#tab<?php echo $j; ?>").animate({<?php echo $right_or_left; ?>:j_width});
          <?php
          }
        $j++;
        }
      $j=1;
      while ($j<=$number_of_tabs)
        {
        ?>
        tab<?php echo $j; ?>_pos=0;
        <?php
        $j++;
        }
        ?>
      tab<?php echo $i; ?>_pos=1;
      } else {
      var i_width=jQuery("#tab<?php echo $i; ?>").width()-tab_width;
      i_width='-'+i_width;
      jQuery("#tab<?php echo $i; ?>").animate({<?php echo $right_or_left; ?>:i_width});
      tab<?php echo $i; ?>_pos=0;
      }
  });
  <?php
  $i++;
  }
}
?>
});
</script>