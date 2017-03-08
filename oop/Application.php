<?php
/**
 * Created by PhpStorm.
 * User: baluteju
 * Date: 3/7/2017
 * Time: 8:01 PM
 */
spl_autoload_register(function ($class_name) {
    $file_name = $class_name . ".php";
    if (file_exists($file_name))
        include $file_name;
    else
        throw new Exception('Unable to load ' . $file_name);
});


/*include('iStorage.php');
include('FileStorage.php');
include('DBStorage.php');*/

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
try {
    $t = new Technology();
} catch (Exception $e) {
    echo $e->getMessage();
}
$app = new Application($db_storage);
$c = new \com\zeolearn\cm\Course();
$c1 = new \com\zeolearn\um\Course();