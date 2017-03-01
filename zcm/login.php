<?php
/**
 * Created by PhpStorm.
 * User: baluteju
 * Date: 2/28/2017
 * Time: 10:00 PM
 */
session_start();

if (isset($_SESSION['ERROR']) && $_SESSION['ERROR'] != '')
    echo "<span style='color:red'>" . $_SESSION['ERROR'] . "</span>"
?>

<html>
<head></head>
<body>
<form method="post" action="auth.php" enctype="multipart/form-data">
    <label>Username</label>
    <input type="text" name="username"/>
    <label>Password</label>
    <input type="password" name="password"/>
    <input type="submit" value="Submit"/>
</form>

<body>
</html>