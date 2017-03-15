<?php

include "Employee.php";
$user = 'root';
$pass = '';

try {
    $pdo = new PDO('mysql:host=localhost;dbname=employees', $user, $pass
        , [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );

    $page = !isset($_REQUEST['page']) ? 0 : $_REQUEST['page'];
    $page_size = 10;

    $sql_total = 'SELECT count(*) as total from employees';

    $total = 0;

    $total = $pdo->query($sql_total)->fetch(PDO::FETCH_COLUMN);
    //var_dump($total_from_db);
    //$total = $total_from_db['total'];

    $total_pages = floor($total / $page_size);

    echo 'page ' . $page . ' of  ' . $total_pages;

    $sql = 'SELECT * from employees limit ' . ($page * $page_size) . ',' . $page_size;

    echo '<br/>';
    $stmt3 = $pdo->query($sql, PDO::FETCH_CLASS, 'Employee');
    while ($row = $stmt3->fetchObject('Employee')) {
        printf('%4d | %20s | %5s' . PHP_EOL,
            $row->emp_no, $row->last_name, $row->birth_date);
        echo '<br/>';
    }


    $pdo = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>