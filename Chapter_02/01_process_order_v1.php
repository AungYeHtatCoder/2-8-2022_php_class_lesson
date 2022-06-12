<?php
  // create short variable names
  $tireqty = (int) $_POST['tireqty'];
  $oilqty = (int) $_POST['oilqty'];
  $sparkqty = (int) $_POST['sparkqty'];
  $address = preg_replace('/\t|\R/',' ',$_POST['address']);
  $document_root = $_SERVER['DOCUMENT_ROOT'];
  $date = date('H:i, jS F Y');
?>
<!DOCTYPE html>
<html>

<head>
 <title>Auto parts from Vovki - Order results</title>
</head>

<body>
 <h1>Auto parts from Vovki</h1>
 <h2>Order results</h2>
 <?php
      echo "<p>Order processed in ".date('H:i, jS F Y')."</p>";
      echo "<p>Your order: </p>";

      $totalqty = 0;
      $totalamount = 0.00;

      define('TIREPRICE', 100);
      define('OILPRICE', 10);
      define('SPARKPRICE', 4);

      $totalqty = $tireqty + $oilqty + $sparkqty;
      echo "<p>Goods ordered: ".$totalqty."<br />";

      if ($totalqty == 0) {
        echo "You didn't order anything on the previous page!<br />";
      } else {
        if ($tireqty > 0) {
          echo htmlspecialchars($tireqty).' tire<br />';
        }
        if ($oilqty > 0) {
          echo htmlspecialchars($oilqty).' bottles of oil<br />';
        }
        if ($sparkqty > 0) {
          echo htmlspecialchars($sparkqty).' spark plugs<br />';
        }
      }

      $totalamount = $tireqty * TIREPRICE
                   + $oilqty * OILPRICE
                   + $sparkqty * SPARKPRICE;

      echo "Total: $".number_format($totalamount,2)."<br />";

      $taxrate = 0.10;  // local sales tax is 10%
      $totalamount = $totalamount * (1 + $taxrate);
      echo "Total including sales tax: $".number_format($totalamount,2)."</p>";

      echo "<p>Shipping address: ".htmlspecialchars($address)."</p>";

      $outputstring = $date."\t".$tireqty." tire\t".$oilqty." bottles of oil\t"
                      .$sparkqty." spark plugs\t\$".$totalamount
                      ."\t". $address."\n";

       // open file for appending
	   @$fp = fopen("$document_root/../orders/orders.txt", 'ab');
	   
	   if (!$fp) {
         echo "<p><strong>Your request cannot be processed at this time.
               Please try again later.</strong></p>";
         exit;
       }

       flock($fp, LOCK_EX);
       fwrite($fp, $outputstring, strlen($outputstring));
       flock($fp, LOCK_UN);
       fclose($fp);

       echo "<p>Order recorded.</p>";
    ?>
</body>

</html>