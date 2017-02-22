<?php
$multiplier="2";
$temp=$multiplier * 5000;

$result = (string)$temp;
var_dump($multiplier);
var_dump($temp);
var_dump($result);
unset($temp);
var_dump($GLOBALS);
?>