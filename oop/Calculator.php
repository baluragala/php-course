<?php

/**
 * Created by PhpStorm.
 * User: baluteju
 * Date: 3/8/2017
 * Time: 6:24 PM
 */
class Calculator
{

    function __call($name, $param)
    {
        if ($name === 'add' && count($param) == 3)
            return $this->add_3_int($param[0], $param[1], $param[2]);
        elseif ($name === 'add' && count($param) == 2)
            return $this->add_2_int($param[0], $param[1]);
        else
            throw new Exception('Call to undefined method ' . $name);
    }

    function divide($a, $b)
    {
        if ($b <= 0) {
            throw new Exception('Division by Zero');
        }

        return $a / $b;
    }

    private function add_2_int($a, $b)
    {
        return $a + $b;
    }

    private function add_3_int($a, $b, $c)
    {
        return $a + $b + $c;
    }

}

$c = new Calculator();
echo $c->divide(1, 0);
