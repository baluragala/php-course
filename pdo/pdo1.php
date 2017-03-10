<?php
/**
 * Created by PhpStorm.
 * User: baluteju
 * Date: 3/9/2017
 * Time: 6:41 PM
 */

// 1 . acquire connection to db
// host - server where db is located
// user
// password
// default database
include "User.php";

$params = [
    'host' => 'localhost',
    'user' => 'root',
    'pwd' => '',
    'db' => 'zcm_user_manager'
];

try {
    $dsn = sprintf('mysql:host=%s;dbname=%s', $params['host'], $params['db']);
    $pdo = new PDO($dsn, $params['user'], $params['pwd'],
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    $sql = 'SELECT * from users';
    /*$result = $pdo->query($sql);
    foreach ($result as $row) {
        print_r($row);
    }

    echo '<br/>';

    $stmt1 = $pdo->query($sql);
    while ($row = $stmt1->fetch(PDO::FETCH_ASSOC)) {
        print_r($row);

    }

    echo '<br/>';

    $stmt2 = $pdo->query($sql);
    while ($row = $stmt2->fetch(PDO::FETCH_OBJ)) {
        print_r($row);
        printf('%4d | %20s | %5s' . PHP_EOL,
            $row->id, $row->email, $row->last_name);
    }

    echo '<br/>';*/


    $stmt3 = $pdo->query($sql, PDO::FETCH_CLASS, 'User');
    while ($user = $stmt3->fetchObject('User')) {
        //print_r($user);
        $user->show();
        /*printf('%4d | %2s | %5s' . PHP_EOL,
            $row->id, $row->email, $row->first_name);*/
    }
    echo '<br/>';


} catch (PDOException $e) {
    echo $e->getMessage();
    die();
}