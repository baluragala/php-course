<?php

/**
 * Created by PhpStorm.
 * User: baluteju
 * Date: 3/7/2017
 * Time: 6:43 PM
 */
//final - to stop inheritance
class Person
{
    protected $name;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param mixed $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }
    protected $age;
    protected $height;
    protected $weight;

    function __construct($name, $age, $height, $weight)
    {
        $this->name = $name;
        $this->age = $age;
        $this->height = $height;
        $this->weight = $weight;
        echo 'Person constructor called';
    }


    function show()
    {
        echo "Name : " . $this->name . "<br/>";
        echo "Age : " . $this->age . "<br/>";
        echo "Height : " . $this->height . "<br/>";
        echo "Weight : " . $this->weight . "<br/>";
    }
}
