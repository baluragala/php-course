<?php
/**
 * Created by PhpStorm.
 * User: baluteju
 * Date: 3/9/2017
 * Time: 5:39 PM
 */

$params = [
    'db'   => __DIR__ . 'zeo.db.sqlite'
];


try {
    $dsn  = sprintf('sqlite:' . $params['db']);
    $pdo  = new PDO($dsn);
    var_dump($pdo);
} catch (PDOException $e) {
    echo $e->getMessage();
} catch (Throwable $e) {
    echo $e->getMessage();
}