<!DOCTYPE html>
<html>

<head>
 <title>Auto parts from Vovka - Shipping costs</title>
 <style>
 table {
  border-collapse: collapse;
  width: 50%;
 }

 table td,
 table th {
  border: 1px solid black;
  padding: 5px;
  text-align: center;
 }
 </style>
</head>

<body>
 <table>
  <tr>
   <th>distance</th>
   <th>price</th>
  </tr>


  <?php
    $distance = 50;
    while ($distance <= 250) {
      echo "<tr>
            <td>".$distance."</td>
            <td>".($distance / 10)."</td>
            </tr>\n";
      $distance += 50;
    }
    ?>

 </table>
</body>

</html>