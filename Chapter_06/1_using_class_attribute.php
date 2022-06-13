<?php 
// using class attribute
class UsingClassAttribute
{
 public $attribute;
 public function __construct($param)
 {
  $this->attribute = $param;
  echo $this->attribute;
 }
}

$obj = new UsingClassAttribute("Hello World <br>");
$obj->attribute = "Hello World";
echo $obj->attribute;