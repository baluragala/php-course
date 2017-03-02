<?php
/**
 * Created by PhpStorm.
 * User: baluteju
 * Date: 3/2/2017
 * Time: 7:08 PM
 */

require('db.php');

$SERVER = 'localhost';
$USER = 'root';
$PASS = '';
$DB = 'zcm_user_manager';
$connection = db_connect($SERVER, $USER, $PASS, $DB);

$sql_create_table = <<<SQL
CREATE TABLE USERS (
	id  INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	first_name VARCHAR(30) NOT NULL,
	last_name VARCHAR(30) NOT NULL,
	email VARCHAR(50) NOT NULL UNIQUE,
	password VARCHAR(50) NOT NULL
)
SQL;

// check if table exist else create table;

$sql_check_if_table_exist = "SELECT 1 FROM USERS LIMIT 1";
$result = db_execute($connection, $sql_check_if_table_exist);
if (!$result) {
    $result_create_table = db_execute($connection, $sql_create_table);
    if ($result_create_table)
        echo 'Table created successfully';
}

?>

<html>
<head>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
	<style>

	</style>
</head>
<body>
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">Zeo User Manager</a>
		</div>
		<ul class="nav navbar-nav">
			<li class="active"><a href="index.php">Home</a></li>
			<li class="active"><a href="add_user.php">ADD USER</a></li>
			<li class="active"><a href="get_users.php">USERS</a></li>
		</ul>
	</div>
</nav>
</body>
</html>

