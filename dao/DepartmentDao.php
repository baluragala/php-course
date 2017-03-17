<?php
/**
 * Created by PhpStorm.
 * User: baluteju
 * Date: 3/17/2017
 * Time: 6:13 PM
 */

include "Department.php";

class DepartmentDao
{
    private function get_db_connection()
    {
        $user = 'root';
        $pass = '';
        $pdo = null;
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=employees', $user, $pass);
        } catch (PDOException $e) {

        }

        return $pdo;
    }

    public function get_departments()
    {
        $departments = array();
        $pdo = $this->get_db_connection();
        $sql = 'SELECT * FROM departments';
        $stmt3 = $pdo->query($sql, PDO::FETCH_CLASS, 'Department');
        while ($department = $stmt3->fetchObject('Department')) {
            array_push($departments, $department);
        }
        return $departments;
    }
}