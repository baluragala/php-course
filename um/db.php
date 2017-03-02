<?php
/**
 * Created by PhpStorm.
 * User: baluteju
 * Date: 3/2/2017
 * Time: 7:09 PM
 */

function db_connect($server='localhost', $user='root', $pass='', $db='zcm_user_manager')
{
    $connection = new mysqli($server, $user, $pass, $db);
    return $connection;
}

function db_execute($connection, $query)
{
    $result = $connection->query($query);
    return $result;
}