<?php
/**
 * Created by PhpStorm.
 * User: baluteju
 * Date: 3/13/2017
 * Time: 4:02 PM
 */

require_once('lib/SMTemplate.php');

$tpl = new SMTemplate();
$smarty = $tpl->get_smarty();
$students = array(
    "James" => array("name" => "James", "roll" => 12, "grade"=>'P'),
    "Jimmy" => array("name" => "Jimmy", "roll" => 18, "grade"=>'F'),
    "Jenny" => array("name" => "Jenny", "roll" => 23, "grade"=>'P'));
/*$smarty->assign("students", $students);
$smarty->display("logical.tpl");*/

$tpl->render("logical",$students);