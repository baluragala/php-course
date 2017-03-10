<?php
/**
 * Created by PhpStorm.
 * User: baluteju
 * Date: 3/9/2017
 * Time: 7:51 PM
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

    $pdo->beginTransaction();
    $courses = [
        ['C7', 250], ['C8', 350], ['C9', 250], ['C10', 450]
    ];

    $sql = 'INSERT INTO courses(title,fee) VALUES(?,?)';
    $stmt = $pdo->prepare($sql);
    foreach ($courses as $course)
        $stmt->execute($course);
    $pdo->commit();
} catch (PDOException $e) {
    $pdo->rollBack();
}