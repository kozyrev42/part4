<?php

class Car
{

    public $color;
    public $wheels;
    public $speed;
    public $brand;

    // определение КОНСТАНТ
    // КОНСТАНТА определяется в контексте КЛАССА
    const TEST_CAR = 'Прототип';
    const TEST_CAR_SPEED = 300;

    // объявление СТАТИЧЕСКОГО свойста
    public static $countCar = 0;

    public function __construct($color, $wheels = 4, $speed, $brand)
    {
        $this->color = $color;
        $this->wheels = $wheels;
        $this->speed = $speed;
        $this->brand = $brand;
        // обращение к СТАТИЧЕСКОМУ свойству, прибавление к нему 1(++)
        self::$countCar++;
    }

    // объявление СТАТИЧЕСКОГО метода
    public static function getCount()
    {
        return self::$countCar;
    }

    public function Test()
    {
        echo 'Hello, World!';
    }

    public function getCarInfo()
    {
        return "<h3>О моем авто:</h3>
            Марка: {$this->brand}<br>
            Цвет: {$this->color}<br>
            Кол-во колес: {$this->wheels}<br>
            Скорость: {$this->speed}<br>";
    }

    public function getPrototypeInfo()
    {
        return "<h3>Данные тестового авто:</h3>
            Наименование: " . self::TEST_CAR . "<br>
            Скорость: " . self::TEST_CAR_SPEED . "<br>";
    }

}