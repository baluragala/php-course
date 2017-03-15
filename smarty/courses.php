<?php
/**
 * Created by PhpStorm.
 * User: baluteju
 * Date: 3/15/2017
 * Time: 5:49 PM
 */


require_once('lib/SMTemplate.php');



$tpl = new SMTemplate();
//$smarty = $tpl->get_smarty();
$tpl->render("courses",null);