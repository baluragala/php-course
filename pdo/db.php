<?php

include "User.php";
$user = 'root';
$pass = '';

try {
    $pdo = new PDO('mysql:host=localhost;dbname=zcm_user_manager', $user, $pass
    //,[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    )
    ;
    // [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING]
    //$sql = 'SELECT * from users---';
    $sql = 'SELECT * from users';

    foreach ($pdo->query($sql) as $row) {
        print_r($row);
    }

    echo '<br/>';

    $stmt1 = $pdo->query($sql);
    while ($row = $stmt1->fetch(PDO::FETCH_ASSOC)) {
        printf('%4d | %20s | %5s' . PHP_EOL, $row['id'],
            $row['email'], $row['last_name']);
    }

    echo '<br/>';

    $stmt2 = $pdo->query($sql);
    while ($row = $stmt2->fetch(PDO::FETCH_OBJ)) {
        printf('%4d | %20s | %5s' . PHP_EOL,
            $row->id, $row->email, $row->last_name);
    }

    echo '<br/>';
    $stmt3 = $pdo->query($sql, PDO::FETCH_CLASS, 'User');
    while ($row = $stmt3->fetchObject('User')) {
        printf('%4d | %20s | %5s' . PHP_EOL,
            $row->id, $row->email, $row->first_name);
    }
    echo '<br/>';

    $pdo = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>