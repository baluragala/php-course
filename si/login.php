<?php
/**
 * Created by PhpStorm.
 * User: baluteju
 * Date: 3/9/2017
 * Time: 8:09 PM
 */

$params = [
    'host' => 'localhost',
    'user' => 'root',
    'pwd' => '',
    'db' => 'zcm_php'
];

try {
    $dsn = sprintf('mysql:host=%s;dbname=%s', $params['host'], $params['db']);
    $pdo = new PDO($dsn, $params['user'], $params['pwd'],
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    /*$sql = "SELECT * FROM users where username='" . $_POST['username'] . "' and password='" . $_POST['password'] . "'";
    echo $sql;
    $stmt1 = $pdo->query($sql);
    while ($row = $stmt1->fetch(PDO::FETCH_ASSOC)) {
        print_r($row);
    }*/

    $sql = 'SELECT * FROM users '
        . 'WHERE username=:un AND password=:pw';
    $stmt = $pdo->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL]);
    $stmt->execute(['un' => $_POST['username'], 'pw' => $_POST['password']]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_LAST);
    do {
        print_r($row);
    } while ($row = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_PRIOR));


} catch (PDOException $e) {

}
?>


<html>
<head>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <style>

    </style>
</head>
<body>
<div class="container">
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="username">username:</label>
            <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="form-group">
            <label for="password">password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <input type="submit" value="ADD" class="btn btn-primary">
    </form>
</div>

<body>
</html>