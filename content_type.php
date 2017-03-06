<?php
/**
 * Created by PhpStorm.
 * User: baluteju
 * Date: 3/6/2017
 * Time: 6:36 PM
 */

$data=<<<DOC
James,1234
Josh,3577
DOC;
echo $data;
header('Content-Type:application/vnd.ms-excel');
header('Content-Disposition: attachment; filename="employee.csv"');

