<?php

/**
 * Created by PhpStorm.
 * User: baluteju
 * Date: 3/17/2017
 * Time: 5:58 PM
 */
class Department
{
    protected $dept_no;
    protected $dept_name;
    //private $pdo;

    /**
     * @return mixed
     */
    public function getDeptNo()
    {
        return $this->dept_no;
    }

    /**
     * @param mixed $dept_no
     */
    public function setDeptNo($dept_no)
    {
        $this->dept_no = $dept_no;
    }

    /**
     * @return mixed
     */
    public function getDeptName()
    {
        return $this->dept_name;
    }

    /**
     * @param mixed $dept_name
     */
    public function setDeptName($dept_name)
    {
        $this->dept_name = $dept_name;
    }
}