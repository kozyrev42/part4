<?php

// http://designpatternsphp.readthedocs.io/ru/latest/README.html

use wfm\interfaces\IGadget;
use app\{BookProduct, NotebookProduct};

error_reporting(-1);

require_once __DIR__ . '/vendor/autoload.php';

/*function autoloder1($class)
{
    $class = str_replace("\\", '/', $class);
    $file = __DIR__ . "/{$class}.php";
    if(file_exists($file)){
        require_once $file;
    }
}

spl_autoload_register('autoloder1');*/

function debug($data){
    echo '<pre>' . print_r($data,1) . '</pre>';
}

function offerCase(IGadget $product){
    echo "<p>Предлагаем чехол для гаджета {$product->getName()}</p>";
}

$book = new BookProduct('Три мушкетера', 20, 1000);
$notebook = new NotebookProduct('Dell', 1000, 'Intel');


$a1 = \app\A::getInstance();
$a2 = \app\A::getInstance();

var_dump($a1);
echo '<br>';
var_dump($a2);

echo '<br>';
$b1 = \app\B::getInstance();
$b2 = \app\B::getInstance();

var_dump($b1);
echo '<br>';
var_dump($b2);