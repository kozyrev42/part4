<?php
// http://ie2.php.net/manual/ru/function.fwrite.php#refsect1-function.fwrite-examples
error_reporting(-1);
require_once 'classes/Car.php';

function debug($data){
    echo '<pre>' . print_r($data,1) . '</pre>';
}

$car1 = new Car('черный', 4, 180, 'volvo');
$car2 = new Car('черный', 4, 200, 'bmw');

echo $car1->getCarInfo();
echo $car2->getCarInfo();

$car1->getLorem();
