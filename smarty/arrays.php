<?php
/**
 * Created by PhpStorm.
 * User: baluteju
 * Date: 3/13/2017
 * Time: 4:02 PM
 */

require_once('lib/SMTemplate.php');

$tpl = new SMTemplate();
//$smarty = $tpl->get_smarty();
$students = array(
    "James" => array("name" => "James", "roll" => 12),
    "Jimmy" => array("name" => "Jimmy", "roll" => 18),
    "Jenny" => array("name" => "Jenny", "roll" => 23));
$data = array("students", $students);
$tpl->render("array",$data);

//$smarty->assign("students", $data);
//$smarty->display("array.tpl");