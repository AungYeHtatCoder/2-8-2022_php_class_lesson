<?php 
class Math {
 static function squared($input) {
  return $input * $input;
 }
}
echo "Math::squared(8) : " . Math::squared(8);