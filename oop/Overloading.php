<?php

/**
 * Created by PhpStorm.
 * User: baluteju
 * Date: 3/8/2017
 * Time: 6:21 PM
 */
class Overloading
{
    function __call($name, $param)
    {
        echo $name;
        var_dump($param);
    }
}

$a=new Overloading();
$a->no_method(1,2,3);