<?php
/**
 * Created by PhpStorm.
 * User: baluteju
 * Date: 3/7/2017
 * Time: 6:50 PM
 */
include('Person.php');
include "iStorage.php";

class Employee extends Person implements iStorage
{
    var $salary;
    var $designation;
    //normal php define('NAME OF CONST',VALUE);
    const CLASS_NAME = 'EMPLOYEE';
    static $class_type = 'Human';


    function __construct($name, $age, $height, $weight, $salary, $designation)
    {
        /*$this->name = $name;
        $this->age = $age;
        $this->height = $height;
        $this->weight = $weight;*/
        //:: scope resolution operator
        parent::__construct($name, $age, $height, $weight);
        $this->salary = $salary;
        $this->designation = $designation;
    }

    static function print_meta()
    {
        self::$class_type = 'CHANGE';
        echo self::$class_type;
    }

    function show()
    {
        /*echo "Name : " . $this->name . "<br/>";
        echo "Age : " . $this->age . "<br/>";
        echo "Height : " . $this->height . "<br/>";
        echo "Weight : " . $this->weight . "<br/>";*/
        echo self::CLASS_NAME;
        parent::show();
        echo "Salary : " . $this->salary . "<br/>";
        echo "Designation : " . $this->designation . "<br/>";
    }

    function create()
    {
        // TODO: Implement create() method.
    }

    function read()
    {
        // TODO: Implement read() method.
    }

    function update()
    {
        // TODO: Implement update() method.
    }

    function delete()
    {
        // TODO: Implement delete() method.
    }
}

$emp1 = new Employee('James1', 29, 179, 88, 100000, "Developer");
$emp1->show();

$emp2 = new Employee('James2', 29, 179, 88, 100000, "Developer");
$emp2->show();

echo Employee::print_meta();
echo Employee::$class_type;