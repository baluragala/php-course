<?php
/**
 * Created by PhpStorm.
 * User: baluteju
 * Date: 2/28/2017
 * Time: 8:46 PM
 */



if (isset($_COOKIE["user"]))
    echo "Welcome back ," . $_COOKIE["user"];

function printArgs($args)
{
    foreach($args as $k=>$v){
        echo $v;
        echo "<br/>";
    }
}

printArgs(array(10,"Ten",100,54,453,442,"dsfdfs"));