<?php 
function larger($x, $y) {
 if((!isset($x)) || (!isset($y))) {
   echo "this fucntion requires two parameters";
   return;
 }

 if ($x >= $y) {
   echo $x ."<br>";
 } else {
   echo $y ."<br>";
 }
}

$a = 1;
$b = 2.5;
$c = 1.9;

larger($a, $b);
larger($c, $a);
larger($d, $a);