<?php
/**
 * Created by PhpStorm.
 * User: baluteju
 * Date: 3/13/2017
 * Time: 4:02 PM
 */

require_once('lib/SMTemplate.php');

$tpl = new SMTemplate();
$data = array(
    "name"=>"John",
    "greetings"=>"Good Morning"
);
$tpl->render("vars",$data);

/*$name = "John";
$smarty->assign("name", $name);
$smarty->assign("greetings", "Good Morning");
$smarty->display("vars.tpl");
*/