<?php
/**
 * Created by PhpStorm.
 * User: baluteju
 * Date: 2/28/2017
 * Time: 10:11 PM
 */
session_start();
session_destroy();
echo "You have been successfully logged out.";
echo "Click here to <a href='login.php'>login</a>";
