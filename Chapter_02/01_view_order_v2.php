<?php
  // create short variable names
  //$document_root = $_SERVER['DOCUMENT_ROOT'];
  $document_root = $_SERVER['DOCUMENT_ROOT'] . '/it_empire_technologies_php_class_2022/Chapter_02/orders/orders.txt';
?>
<!DOCTYPE html>
<html>

<head>
 <title>Auto parts from Shop - Order results</title>
</head>

<body>
 <h1>Auto parts from Shop</h1>
 <h2>Order results</h2>
 <?php
      @$fp = fopen("$document_root", 'rb');
      flock($fp, LOCK_SH); // lock file for reading

      if (!$fp) {
        echo "<p><strong>There are no pending orders.<br />
              Please try again later.</strong></p>";
        exit;
      }

      while (!feof($fp)) {
         $order= fgets($fp);
         echo htmlspecialchars($order)."<br />";
      }

      flock($fp, LOCK_UN); // release the read lock

      echo 'End position of the file pointer: '.(ftell($fp));
      echo '<br />';
      rewind($fp);
      echo 'Position after call rewind(): '.(ftell($fp));
      echo '<br />';

      fclose($fp); 

    ?>
</body>

</html>