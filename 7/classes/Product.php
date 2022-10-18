<?php

class Product
{
    // общие свойства
    public $name;
    public $price;

    // свойство только для ПК
    public $cpu;

    // свойство только для КНИГ
    public $numPages;

    public function __construct($name, $price, $cpu = null, $numPages = null)
    {
        $this->name = $name;
        $this->price = $price;
        $this->cpu = $cpu;
        $this->numPages = $numPages;
    }

    public function getCpu()
    {
        return $this->cpu;
    }

    public function getNumPages()
    {
        return $this->numPages;
    }

    // по умолчание продукт = "ноутбук"
    public function getProduct($type = 'notebook')
    {
        $out = "<hr><b>О товаре:</b><br>
                Наименование: {$this->name}<br>
                Цена: {$this->price}<br>";
        if($type == 'notebook'){
            // добавляем/конкотинирум ещё одну строку в переменную
            $out .= "Процессор: {$this->cpu}<br>";
        }else{
            // или другую
            $out .= "Кол-во страниц: {$this->numPages}<br>";
        }
        return $out;
    }

}