<?php
$user='root';
$pass='';

try {
    $dbh = new PDO('mysql:host=localhost;dbname=zcm_user_manager', $user, $pass);
    foreach($dbh->query('SELECT * from users') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>