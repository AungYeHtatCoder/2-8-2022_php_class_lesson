<?php 
//three-dimensional array is an array containing arrays of arrays:
$categories = array(array(array('CAR_TIR', 'Tires', 100 ),
array('CAR_OIL', 'Oil', 10 ),
array('CAR_SPK', 'Spark Plugs', 4 )
),
array(array('VAN_TIR', 'Tires', 120 ),
array('VAN_OIL', 'Oil', 12 ),
array('VAN_SPK', 'Spark Plugs', 5 )
),
array(array('TRK_TIR', 'Tires', 150 ),
array('TRK_OIL', 'Oil', 15 ),
array('TRK_SPK', 'Spark Plugs', 6 )
)
);
//Because this array has only numeric indices, you can use nested for loops to display its contents:
for ($layer = 0; $layer < 3; $layer++) {
 echo 'Layer'.$layer."<br />";
 for ($row = 0; $row < 3; $row++) {
 for ($column = 0; $column < 3; $column++) {
echo '|'.$categories[$layer][$row][$column];
 }
 echo '|<br />';
 }
}