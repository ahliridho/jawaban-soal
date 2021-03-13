<?php
function acak()
{
  $data = 'abcdefghijklmnopqrstuvwxyz1234567890';
  $string = '';
  for($i = 0; $i < 28; $i++) {
      $pos = rand(0, strlen($data)-1);
      $string .= $data[$pos];
  }
  echo $string;
}
function create_random($length)
{
    for ($i=0; $i <$length ; $i++) {

      acak();
      echo "<br>";
    }
}

echo create_random(10);

?>
