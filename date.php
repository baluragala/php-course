<?php
/**
 * Created by PhpStorm.
 * User: baluteju
 * Date: 3/14/2017
 * Time: 7:08 PM
 */

date_default_timezone_set("America/New_York");
//echo date("y/m/d h:i:s");

//$d = mktime(22,14,54,8,12,2017);
//echo date("Y-m-d h:i:s",$d);

/*$d=strtotime("10:30pm April 15 2017");
echo date("Y-m-d h:i:sa",$d);*/

/*$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa",$d);*/

/*$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa",$d);*/

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa",$d);