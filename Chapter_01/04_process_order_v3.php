<?php
  // создать короткие имена переменных
  $tireqty = $_POST['tireqty'];
  $oilqty = $_POST['oilqty'];
  $sparkqty = $_POST['sparkqty'];
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
    echo "<p>Order processed in ";
    echo date('H:i, jS F Y');
    echo "</p>";

    echo '<p>Your order: </p>';
    echo htmlspecialchars($tireqty).' tire<br />';
    echo htmlspecialchars($oilqty).' bottles of oil<br />';
    echo htmlspecialchars($sparkqty).' spark plugs<br />';
    ?>
</body>

</html>