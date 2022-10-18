<?php


class NotebookProduct extends Product
{

    public $cpu;

    public function __construct($name, $price, $cpu)
    {
        // передаём данные в Конструктор родительского Класс, чтобы не ДУБЛИРОВАТЬ и не ПЕРЕОПРЕДЕЛЯТЬ
        parent::__construct($name, $price);
        $this->cpu = $cpu;
    }

    public function getProduct()
    {
        // получим данные из родительского класса
        $out = parent::getProduct();
        // добавим к данным ещё строку
        $out .= "Процессор: {$this->cpu}<br>";
        return $out;
    }

    public function getCpu()
    {
        return $this->cpu;
    }

}