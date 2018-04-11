<?php
/**
 * Created by PhpStorm.
 * User: Ella
 * Date: 4/6/2018
 * Time: 2:55 PM
 */

$prices = array('Tires'=>100, 'Oil'=>10, 'Spark Plugs'=>4);
/*foreach($prices as $key => $value){
    echo $key. "-" . $value . "<br/>";
}*/

ksort($prices);

while( list($product, $price) = each($prices)){
echo $product. " - " . $price . "<br />";
}

$prices = array(
    array('Code'=> 'TIR', 'Description'=> 'Tires', 'Price'=> 100),  //第一行
    array('Code'=> 'OIL', 'Description'=> 'Oil',   'Price'=> 10),  //第二行
    array('Code'=> 'SPK', 'Description'=> 'Spark Plugs', 'Price'=> 4)   //第三行
);

/*$array = array(1,2,3,3,5);
$value = end($array);
while($array){
    echo "$value <br />";
    $value = prev($array);
}*/
$array = array(1,2,3,3,5);
$ac = array_count_values($array);
while( list($key, $value) = each($ac)){
    echo $key. " - " . $value. "<br />";
}

$array1 = array('Code'=> 'TIR', 'Description'=> 'Tires', 'Price'=> 100);
extract($array1, EXTR_PREFIX_ALL, 'my_prefix');
echo "$my_prefix_Code    $my_prefix_Description   $my_prefix_Price";


