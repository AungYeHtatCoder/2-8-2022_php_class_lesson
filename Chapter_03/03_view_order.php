<?php
  // create short variable names
  //$document_root = $_SERVER['DOCUMENT_ROOT'];
  $document_root = $_SERVER['DOCUMENT_ROOT'] . '/it_empire_technologies_php_class_2022/Chapter_03/orders/orders.txt';
?>
<!DOCTYPE html>
<html>

<head>
 <title>Auto parts from Car_Spare_Shop</title>
</head>

<body>
 <h1>Auto parts from Car_Spare_Shop</h1>
 <?php
    $orders= file("$document_root");

    $number_of_orders = count($orders);
    if ($number_of_orders == 0) {
      echo "<p><strong>There are no pending orders.<br />
            Please try again later.</strong></p>";
    }
 
    for ($i=0; $i<$number_of_orders; $i++) {
      echo $orders[$i]."<br />";
    }
    ?>
</body>

</html>