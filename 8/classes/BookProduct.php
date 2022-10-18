<?php


class BookProduct extends Product
{

    public $numPages;

    public function __construct($name, $price, $numPages)
    {
        // передача параметров в Родительский Класс, то есть в 'Product'
        parent::__construct($name, $price);
        $this->numPages = $numPages;
    }

    public function getProduct()
    {
        $out = parent::getProduct();
        $out .= "Кол-во страниц: {$this->numPages}<br>";
        return $out;
    }

    public function getNumPages()
    {
        return $this->numPages;
    }

}