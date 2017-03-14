<?php
/**
 * Created by PhpStorm.
 * User: baluteju
 * Date: 3/13/2017
 * Time: 2:45 PM
 */

require_once('lib/SMTemplate.php');

$tpl = new SMTemplate();
$tpl->render('home');

/*
 * 1. Create instance for Smarty with required config
 * 2. Assign data, key->value pairs
 * 3. which template file should used to render
 */