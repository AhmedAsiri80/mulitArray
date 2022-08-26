<?php

// model , intock , sold 

$product1 = array('Frod' , 23 , 7);
$product2 = array('Toyota' , 14 , 5);
$product3 = array('BMD' , 35, 25);

$stock_1 = array(
    array('Frod' , 23 , 7),
    array('Toyota' , 14 , 5),
    array('BMD' , 35, 25 )
);

echo "<pre>"; print_r($stock_1); "</pre>";
echo $stock_1[2][1];

?>