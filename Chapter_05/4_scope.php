<?php
function fn_scope() {
  echo 'inside the function $var first = '.$var.'<br />';
  $var = 2;
  echo 'then inside the function $var = '.$var.'<br />';
}
$var = 1;
fn_scope();
echo 'outside the function $var = '.$var.'<br />';
?>