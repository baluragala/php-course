<?php

/**
 * Created by PhpStorm.
 * User: baluteju
 * Date: 3/8/2017
 * Time: 7:17 PM
 */
class Car
{
    private $make;

    /**
     * @return mixed
     */
    public function getMake()
    {
        return $this->make;
    }

    /**
     * @param mixed $make
     */
    public function setMake($make)
    {
        $this->make = $make;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    private $model;


    private $price;

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        if ($price <= 0)
            throw new InvalidPriceException('Price cannot be 0 or negative');
        $this->price = $price;
    }


}

class InvalidPriceException extends Exception
{

}

$mercedes = new Car();
$mercedes->setPrice(-100);

try {
    } catch (InvalidPriceException $e) {
   //logging $e

    throw $e;
} finally {
    echo 'New Car is created';
}