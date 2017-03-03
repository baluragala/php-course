<?php
/**
 * Created by PhpStorm.
 * User: baluteju
 * Date: 3/3/2017
 * Time: 8:01 PM
 */
/*
$filename="users.dat";
$file = fopen($filename,"w");
fwrite($file,"This is text");
fclose($file);
// 1. open
// 2. read / write
// 3. close*/


$src="../array_fun.php";
$dest="array_fun.php";

$src_file = fopen($src,"r");
$dest_file = fopen($dest,"w"); // "a" for append operation
$text = fread($src_file,filesize($src));
fwrite($dest_file,$text);
fclose($src_file);
fclose($dest_file);


