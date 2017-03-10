<?php
/**
 * Created by PhpStorm.
 * User: baluteju
 * Date: 3/9/2017
 * Time: 6:11 PM
 */
$params = [
    'host' => 'localhost',
    'user' => 'root',
    'pwd' => '',
    'db' => 'zcm_php'
];
$dsn = sprintf('mysql:host=%s;dbname=%s', $params['host'], $params['db']);
$opts = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
$pdo = new PDO($dsn, $params['user'], $params['pwd'], $opts);
$sql = 'SELECT * FROM courses '
    . 'WHERE fee > :min AND fee < :max '
    . 'ORDER BY id LIMIT 20';
$stmt = $pdo->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL]);
$min = 100;
$max = 700;
$stmt->execute(['min' => $min, 'max' => $max]);
$row = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_LAST);
do {
    printf('%4d | %20s | %5s' . PHP_EOL,
        $row['id'],
        $row['title'],
        $row['fee']);
} while ($row = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_PRIOR));