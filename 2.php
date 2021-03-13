<?php
$bubbleshort  = array("u","W","d","o","b","d","D","s","y","m","i","t","a");
function buble_short($bubbleshort){
  do{
    $geser = false;
    for ($i=0, $c=count($bubbleshort)-1;$i<$c;$i++) {
      if($bubbleshort[$i]>$bubbleshort[$i+1]){
          list($bubbleshort[$i+1],$bubbleshort[$i])=
          array($bubbleshort[$i],$bubbleshort[$i+1]);
          $geser= true;
      }
    }

  }
  while ($geser);
  return $bubbleshort;
}
echo "original array:\n";
echo implode(',',$bubbleshort);
echo "\nSorted Array\n:";
echo implode(', ',buble_short($bubbleshort)). PHP_EOL;
 ?>
