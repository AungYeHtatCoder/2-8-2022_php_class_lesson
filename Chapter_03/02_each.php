<?php

$prices['Tires'] = 100;
$prices['Oil'] = 10;
$prices['Spark plug'] = 4;

foreach ($prices as $key => $value) {
  echo $key.': $'.$value.'<br />';
}

?>