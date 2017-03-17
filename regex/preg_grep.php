<?php
$foods = array("pasta", "steak", "fish", "potatoes");

// find elements beginning with "p", followed by one or more letters.
$p_foods = preg_grep("/P(\w+)/i", $foods);
var_dump($p_foods)

?>