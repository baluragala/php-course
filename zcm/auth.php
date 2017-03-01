<?php
/**
 * Created by PhpStorm.
 * User: baluteju
 * Date: 2/28/2017
 * Time: 10:02 PM
 */
session_start();
if (isset($_POST)) {
    if (isset($_POST['username']) && $_POST['username'] != '' && isset($_POST['password'])) {
        header('Location: home.php');
        unset($_SESSION['ERROR']);
        $_SESSION['loggedIn']=1;
    } else {
        $_SESSION['ERROR'] = "Username and password are required";
        header('Location: login.php');
    }
}