<?php 
$products = array( array('TIR', 'Tires', 100 ),
array('OIL', 'Oil', 10 ),
array('SPK', 'Spark Plugs', 4 ) );

//To display the contents of this array, you could manually access each element in order like this:
echo "To display the contents of this array, you could manually access each element in order like this:";
echo "<br />";
echo '|'.$products[0][0].'|'.$products[0][1].'|'.$products[0][2].'|<br />';
echo '|'.$products[1][0].'|'.$products[1][1].'|'.$products[1][2].'|<br />';
echo '|'.$products[2][0].'|'.$products[2][1].'|'.$products[2][2].'|<br />';

//Alternatively, you could place a for loop inside another for loop to achieve the same result:
 echo "<hr>";
echo "Alternatively, you could place a for loop inside another for loop to achieve the same result:";
echo "<br />";
for ($row = 0; $row < 3; $row++) {
 for ($column = 0; $column < 3; $column++) {
echo '|'.$products[$row][$column];
 }
 echo '|<br />';
}