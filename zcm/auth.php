<?php
/**
 * Created by PhpStorm.
 * User: baluteju
 * Date: 2/28/2017
 * Time: 10:02 PM
 */
session_start();

print_r(getallheaders());
print_r(headers_list());

if (isset($_POST)) {
    if (isset($_POST['username']) && $_POST['username'] != '' && isset($_POST['password'])) {
        header('Location: home.php');
        $_SESSION['loggedIn'] = 1;
    } else {
        //$_SESSION['ERROR'] = "Username and password are required";
        //header('Location: login.php?ERROR=Username and password are required');
        header('Location: http://www.google.com');
        header('X-ZCM-ID: 1332wd432');
    }
}