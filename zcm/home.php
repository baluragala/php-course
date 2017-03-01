<?php
/**
 * Created by PhpStorm.
 * User: baluteju
 * Date: 2/28/2017
 * Time: 10:00 PM
 */
session_start();
if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']==1){
    echo "<h1>This is home page</h1>";
    echo "<a href='logout.php'>Logout</a>";
}else{
    header('Location:login.php');
}
