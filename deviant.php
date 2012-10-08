<?PHP
$username=$_GET["username"];
$limit=$_GET["limit"];
$max_width=$_GET["max_width"];
$max_height=$_GET["max_height"];
$columns=$_GET["columns"];
 
	/******************************************************************************************************************
	   RSS PARSING FUNCTION
	******************************************************************************************************************/
 
	//FUNCTION TO PARSE RSS IN PHP 4 OR PHP 4
	function parseRSS($url) { 
 
	//PARSE RSS FEED
        $feedeed = implode('', file($url));
        $parser = xml_parser_create();
        xml_parse_into_struct($parser, $feedeed, $valueals, $index);
        xml_parser_free($parser);
 
	//CONSTRUCT ARRAY
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
 
	//RETURN ARRAY VALUES
        return $values[0];
	} 
 
 
	/******************************************************************************************************************
	  SAMPLE USAGE OF FUNCTION
	******************************************************************************************************************/
 
	//PARSE THE RSS FEED INTO ARRAY
	$xml = parseRSS("http://backend.deviantart.com/rss.xml?type=deviation&q=by%3Ajackie-dd+sort%3Atime+meta%3Aall");
	//SAMPLE USAGE 

  $k=0;
	foreach($xml['RSS']['CHANNEL']['ITEM'] as $item) if ($k<$limit){
  $picture[$k] = parseRSS("http://backend.deviantart.com/oembed?url={$item['LINK']}&format=xml");
  //Get width to height ratio for maxes
  $ratio=$picture[$k]["OEMBED"]["THUMBNAIL_WIDTH"]/$picture[$k]["OEMBED"]["THUMBNAIL_HEIGHT"];
  //Set dimensions with maxes
  if ($ratio>1)
    {
    $height[$k]=$max_height;
    $width[$k]=round($ratio*$height[$k]);
    if ($width[$k]>$max_width)
      {
      $width[$k]=$max_width;
      $height[$k]=round((1/$ratio)*$width[$k]);
      }
    } else if ($ratio<=1)
    {
    $width[$k]=$max_width;
    $height[$k]=round((1/$ratio)*$width[$k]);
    if ($height[$k]>$max_height)
      {
      $height[$k]=$max_height;
      $width[$k]=round($ratio*$height[$k]);
      }   
    }  
  
  
  //store contents
  $content[$k]='<a href="'.$item["LINK"].'" target="blank" style="border:none;"><img style="vertical-align:middle;padding:1px;border:none;" border="0" src="'.$picture[$k]["OEMBED"]["THUMBNAIL_URL_150"].'" height="'.$height[$k].'" width="'.$width[$k].'" title="'.$item["TITLE"].'"></a>';
 
  $k=$k+1;
  } //end foreach display
$k=0;  
//display contents
/*
echo '<center>'.$header.'<br /><table cellpadding="0" cellspacing="0">'; 
while ($k<$limit)
  {
  echo '<tr>';
  $j=0;
  while ($j<$columns)
    {
    echo '<td align="center">'.$content[$k].'</td>';
    $k=$k+1;
    $j=$j+1;
    }
  echo '</tr>';
  }

echo '</table></center>';
*/

echo '<body style="width:100%;margin:0px;padding:0px;"><center>'; 
while ($k<$limit)
  {
  
  $j=0;
  while ($j<$columns)
    {
    echo $content[$k];
    $k=$k+1;
    $j=$j+1;
    }
  echo '<br />';  
  }
echo '</center></body>';

?>



  