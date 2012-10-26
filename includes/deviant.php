<?php
$deviantoptions = array('username' => get_option(wpflybox_deviant_username) ,'limit' => get_option(wpflybox_deviant_limit), 'max_width' => get_option(wpflybox_deviant_max_width), 'max_height' => get_option(wpflybox_deviant_max_height), 'columns' => get_option(wpflybox_deviant_columns));
function wpfb_get_deviant_data($options)
{
$key = 'wpfb_d_' . $options['username'];
$you = get_transient($key);
if (!$you)
{  
	function parseRSS($url) { 
        $feedeed = implode('', file($url));
        $parser = xml_parser_create();
        xml_parse_into_struct($parser, $feedeed, $valueals, $index);
        xml_parser_free($parser);
 
        foreach($valueals as $keyey => $valueal){
            if($valueal['type'] != 'cdata') {
                $item[$keyey] = $valueal;
			}
        } 
        $i = 0;
        foreach($item as $key => $value){
            if($value['type'] == 'open') { 
                $i++;
                $itemame[$i] = $value['tag']; 
            } elseif($value['type'] == 'close') { 
                $feed = $values[$i];
                $item = $itemame[$i];
                $i--; 
                if(count($values[$i])>1){
                    $values[$i][$item][] = $feed;
                } else {
                    $values[$i][$item] = $feed;
                } 
            } else {
                $values[$i][$value['tag']] = $value['value'];  
            }
        } 
        return $values[0];
	}

$xml = parseRSS("http://backend.deviantart.com/rss.xml?type=deviation&q=by%3A".$options['username']."+sort%3Atime+meta%3Aall");


$k=0;
foreach($xml['RSS']['CHANNEL']['ITEM'] as $item) if ($k<$options['limit']){
$picture[$k] = parseRSS("http://backend.deviantart.com/oembed?url=".$item['LINK']."&format=xml");
//Get width to height ratio for maxes

if ($picture[$k]["OEMBED"]["TYPE"] == 'photo'){

$ratio=$picture[$k]["OEMBED"]["THUMBNAIL_WIDTH"]/$picture[$k]["OEMBED"]["THUMBNAIL_HEIGHT"];
//Set dimensions with maxes
if ($ratio>1)
  {
  $height[$k]=$options['max_height'];
  $width[$k]=round($ratio*$height[$k]);
  if ($width[$k]>$options['max_width'])
    {
    $width[$k]=$options['max_width'];
    $height[$k]=round((1/$ratio)*$width[$k]);
    }
  } else if ($ratio<=1)
  {
  $width[$k]=$options['max_width'];
  $height[$k]=round((1/$ratio)*$width[$k]);
  if ($height[$k]>$options['max_height'])
    {
    $height[$k]=$options['max_height'];
    $width[$k]=round($ratio*$height[$k]);
    }   
  }

  $you[$k]['link']=$item["LINK"];
  $you[$k]['thumbnail']=$picture[$k]["OEMBED"]["THUMBNAIL_URL_150"];
  $you[$k]['height']=$height[$k];
  $you[$k]['width']=$width[$k];
  $you[$k]['title']=$item["TITLE"];
   
  $k=$k+1;
	
}
}
  set_transient($key, $you, 60*60*3);
  update_option($key, $you);
  return $you;
} else {
  return $you;
}
}

function wpfb_show_deviant($options, $data)
{
$k=0;
echo '<div style="width:100%;margin:0px;padding:0px;"><center>'; 
while ($k<$options['limit'])
  {
  
  $j=0;
  while ($j<$options['columns'])
    {
    echo '<a href="'.$data[$k][link].'" target="_blank" style="border:none;"><img style="vertical-align:middle;padding:1px;border:none;" border="0" src="'.$data[$k][thumbnail].'" height="'.$data[$k][height].'" width="'.$data[$k][width].'" title="'.$data[$k][title].'"></a>';
    $k=$k+1;
    $j=$j+1;
    }
  echo '<br />';  
  }
echo '</center></div>';
}

$you = wpfb_get_deviant_data($deviantoptions);
 
echo '<div class="wpfb-deviant" id="wpfb-deviant">
        <div class="wpfb-deviant-transition">
          <table class="wpflyboxtable">
            <tr style="background:transparent">';
if (get_option(wpflybox_side)=="right")
  {
  echo '<th valign="top" >';
  if (get_option(wpflybox_usecustombutton) == "true")
    {
    echo '<a class="wpflybox_button" href="#"><img src="'.WP_PLUGIN_URL.'/wp-flybox/static/icons/deviant.png" height="30"></a>';
    } else {
    echo'<a href="#"><div style="margin-left:0px; margin-top:0px; width:32px; height:101px; background-position:0px -909px; background-image:url(\''.WP_PLUGIN_URL.'/wp-flybox/static/FlyBoxSpriteRight.png\');padding:0px;"> </div></a>';
    }
    echo '</th>';
  }
      echo '<th style="background-color:#fff; border: 2px solid #506256; height:'.get_option(wpflybox_deviant_frame_height).'px;width:'.get_option(wpflybox_deviant_frame_width).'px; overflow:hidden;padding:0px;">';
      if($you)
        {
        wpfb_show_deviant($deviantoptions, $you);
        } else {
        echo 'Error: Invalid username or deviant server cannot be reached.';
        }      
      echo '</th>';
if (get_option(wpflybox_side)=="left")
  {
  echo '<th valign="top" >';
  if (get_option(wpflybox_usecustombutton) == "true")
    {
    echo '<a class="wpflybox_button" href="#"><img src="'.WP_PLUGIN_URL.'/wp-flybox/static/icons/deviant.png" height="30"></a>';
    } else {
    echo'<a href="#"><div style="margin-left:0px; margin-top:0px; width:32px; height:101px; background-position:0px -909px; background-image:url(\''.WP_PLUGIN_URL.'/wp-flybox/static/FlyBoxSpriteLeft.png\');padding:0px;"> </div></a>';
    }
    echo '</th>';
  }
echo '</tr>
      </table>
      </div>
      </div>';
      
?>