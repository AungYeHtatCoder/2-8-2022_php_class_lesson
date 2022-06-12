<!DOCTYPE html>
<html>

<head>
 <title>Auto parts from Vovka - Order form</title>
</head>

<body>
 <form action="01_view_order.php" method="post">
  <table style="border: 0px;">
   <tr style="background: #cccccc;">
    <td style="width: 150px; text-align: center;">Goods</td>
    <td style="width: 15px; text-align: center;">Quantity</td>
   </tr>
   <tr>
    <td>Tires</td>
    <td><input type="text" name="tireqty" size="3" maxlength="3" /></td>
   </tr>
   <tr>
    <td>Oil</td>
    <td><input type="text" name="oilqty" size="3" maxlength="3" /></td>
   </tr>
   <tr>
    <td>Spark plug</td>
    <td><input type="text" name="sparkqty" size="3" maxlength="3" /></td>
   </tr>
   <tr>
    <td>Shipping address</td>
    <td><input type="text" name="address" size="50" maxlength="100" </td>
   </tr>
   <tr>
    <td colspan="2" style="text-align: center;"><input type="submit" value="send an order" /></td>
   </tr>
  </table>
 </form>
</body>

</html>