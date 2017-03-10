<?php
/**
 * Created by PhpStorm.
 * User: baluteju
 * Date: 3/9/2017
 * Time: 5:38 PM
 */


$params = [
    'host' => 'localhost',
    'user' => 'root',
    'pwd'  => '',
    'db'   => 'zcm_user_manager'
];

try {
    $dsn  = sprintf('mysql:host=%s;dbname=%s',
        $params['host'], $params['db']);
    $pdo  = new PDO($dsn, $params['user'], $params['pwd']);
    var_dump($pdo);
} catch (PDOException $e) {
    echo $e->getMessage();
} catch (Throwable $e) {
    echo $e->getMessage();
}
