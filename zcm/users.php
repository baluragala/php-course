<?php
/**
 * Created by PhpStorm.
 * User: baluteju
 * Date: 3/1/2017
 * Time: 8:13 PM
 */

$conn = new mysqli('localhost', 'root', '', 'zcm_php');
if ($conn->connect_error) {
    die('Cloud not connect to database' . $conn->connect_error);
}

$sql = "select * from users";
$result = $conn->query($sql);
if($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo vsprintf("username : %s, password: %s <br/>", $row);
    }
}

$conn->close();