<?php
/**
 * Created by PhpStorm.
 * User: baluteju
 * Date: 2/28/2017
 * Time: 10:00 PM
 */
session_start();
print_r(getallheaders());

print_r(headers_list());
if (isset($_GET['ERROR']) && $_GET['ERROR'] != '')
    echo "<span style='color:red'>" . $_GET['ERROR'] . "</span>"
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