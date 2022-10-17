<?php
/**
 * Created by PhpStorm.
 * User: Админ
 * Date: 04.02.2018
 * Time: 11:20
 */

namespace app;


class A
{

    protected const TEST = "Class A";

    public function getTest()
    {
        var_dump(self::TEST);
    }

    public function getTest2()
    {
        var_dump(static::TEST);
    }

}