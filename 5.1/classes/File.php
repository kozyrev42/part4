<?php

class File
{
    public $pathfile;
    // флаг открытости файла
    public $fp;

    // контент для записи
    public $textcontent;

    // должен получить путь к файлу
    public function __construct($pathfile)
    {
        $this->pathfile = $pathfile;

        // если не доступен
        if (!is_writable($this->pathfile)) {
            echo "Файл $this->pathfile НЕДОСТУПЕН для записи <br>";
            exit;
        }

        // убедимся, что файл существует и доступен для записи.
        if (is_writable($this->pathfile)) {
            echo "Файл $this->pathfile ДОСТУПЕН для записи <br>";
        }
        // открываем файл, и регистрируем открыт-ли он
        if ($this->fp = fopen($this->pathfile, 'a')) {
            echo "файл открыт ($this->pathfile)<br>";
            //exit;
        }

        // Записываем $textcontent в наш открытый файл.
        // функция принимает файл для записи и контент, возвращает булевое результата
        if (fwrite($this->fp, $this->textcontent) === FALSE) {
            echo "Не могу произвести запись в файл ($this->pathfile)";
            exit;
        } else {
            echo "ЗАПИСЬ МОЖНО ПРОИЗВОДИТЬ<br>";
        }
    }

    public function __destruct()
    {
        if (fclose($this->fp) === TRUE) {
            echo "ФАЙЛ ЗАКРЫТ ДЛЯ ЗАПИСИ";
        }
    }

    // мой кастомный метод, который будет записывать в файл
    public function write($textcontent)
    {
        fwrite($this->fp, $textcontent);
    }

}