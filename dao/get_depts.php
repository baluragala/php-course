<?php
/**
 * Created by PhpStorm.
 * User: baluteju
 * Date: 3/17/2017
 * Time: 6:06 PM
 */

include "DepartmentDao.php";
include "lib/smarty/Smarty.class.php";
//include "lib/SMTemplate.php";

$d = new DepartmentDao();
$depts = $d->get_departments();
$smarty = new Smarty();
$smarty->template_dir = 'views';
/*$smarty->assign("depts", array(array("dept_no" => 1, "dept_name" => "Sales"),
    array("dept_no" => 2, "dept_name" => "Sales1"),
    array("dept_no" => 3, "dept_name" => "Sales2")
));*/

$smarty->assign("d", $depts);
$smarty->display("depts.tpl");