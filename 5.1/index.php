<?php

require_once 'classes/File.php';

// создадим Объект, конструктору передаём расположение файла, лежащего в этой же дире
$myObject = new File(__DIR__ . '\file.txt');

// запишим текст
$myObject->write("_ТЕКСТ ДЛЯ ЗАПИСИ_");

//var_dump($myObject);

