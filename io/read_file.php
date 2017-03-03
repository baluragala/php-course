<?php
/**
 * Created by PhpStorm.
 * User: baluteju
 * Date: 3/3/2017
 * Time: 7:47 PM
 */

$file = fopen("../array_fun1.php","r");
$text = fread($file,filesize("../array_fun.php"));
fclose($file);
// 1. open
// 2. read / write
// 3. close
echo $text;