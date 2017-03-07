<?php
/**
 * Created by PhpStorm.
 * User: baluteju
 * Date: 3/7/2017
 * Time: 8:01 PM
 */
include('iStorage.php');
include('FileStorage.php');
include('DBStorage.php');

class Application
{
    var $name;
    var $age;
    var $storage;

    function __construct($storage)
    {
        $this->storage = $storage;
    }

    function save()
    {
        $this->storage->create();
    }
}


//$fileStorage = new FileStorage();
$db_storage = new DBStorage();
$app = new Application($db_storage);
