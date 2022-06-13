<?php
function fn_scope() {
  global $var;
  $var = 'content';
  echo 'inside a function $var = '.$var.'<br />';
}

fn_scope();
echo 'outside the function $var = '.$var;
?>