<?php 
$products = array(array('Code' => 'TIR',
'Description' => 'Tires',
'Price' => 100
),
array('Code' => 'OIL',
'Description' => 'Oil',
'Price' => 10
),
array('Code' => 'SPK',
'Description' => 'Spark Plugs',
'Price' =>4
)
);

//You do, however, lose the ability to use a simple for loop to step through each column in turn.
//Here is one way to write code to display this array:
for ($row = 0; $row < 3; $row++){
 echo '|'.$products[$row]['Code'].'|'.$products[$row]['Description'].

'|'.$products[$row]['Price'].'|<br />';
}