<?php
error_reporting(-1);
require_once 'classes/Car.php';

function debug($data){
    echo '<pre>' . print_r($data,1) . '</pre>';
}
// счетчик будет = 0, так как Объект не создавался, счетчик не увеличивался
echo Car::$countCar;
echo '<br>';
$car1 = new Car('черный', 4, 180, 'volvo');
// при создании объекта счётчик увеличился на 1, так как сработал конструктор
echo Car::$countCar;
echo '<br>';
$car2 = new Car('черный', 4, 200, 'bmw');

// счетчик увеличился еще на 1, так как конструктор вызывался еще раз
echo Car::getCount();

echo $car1->getCarInfo();
echo $car2->getCarInfo();

echo $car1->getPrototypeInfo();

echo Car::TEST_CAR_SPEED;

echo '<br>';

echo Car::class;

