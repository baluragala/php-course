<?php
/**
 * Created by PhpStorm.
 * User: baluteju
 * Date: 3/9/2017
 * Time: 6:17 PM
 */
$params = [
    'host' => 'localhost',
    'user' => 'root',
    'pwd' => '',
    'db' => 'zcm_user_manager'
];
$dsn = sprintf('mysql:host=%s;dbname=%s', $params['host'], $params['db']);
$opts = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
$pdo = new PDO($dsn, $params['user'], $params['pwd'], $opts);
$fields = array('first_name', 'last_name', 'email', 'password');
$data = array(array('fn1', 'ln1', 'email1', 'pass1'), array('fn2', 'ln2', 'email2', 'pass2'), array('fn3', 'ln3', 'email3', 'pass3'));
try {
    $pdo->beginTransaction();
    $sql = "INSERT INTO users ('first_name', 'last_name', 'email', 'password') VALUES (?,?,?,?)";
    echo $sql;
    $stmt = $pdo->prepare($sql);
    foreach ($data as $row) {
        var_dump($row);
        $stmt->execute($row);
    }
    $pdo->commit();
} catch (PDOException $e) {
    var_dump($e);
    //error_log($e->getMessage());
    $pdo->rollBack();
}