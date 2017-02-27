<?php
/**
 * Created by PhpStorm.
 * User: baluteju
 * Date: 2/27/2017
 * Time: 8:41 PM
 */

function factorial($number)
{
    if ($number < 2)
        return 1;
    else
        return $number * factorial($number - 1);
}

echo factorial(6);

// 5! -> 5 * 4 * 3 * 2 * 1

// n * (n-1)


// 4 * f(3)
// 3 * 2
// 2 * 1