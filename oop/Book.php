<?php

/**
 * Created by PhpStorm.
 * User: baluteju
 * Date: 3/6/2017
 * Time: 7:42 PM
 */
class Book
{

    /*Member variables */
    private $title;
    private $author;
    private $price;

    function __construct($title, $author, $price)
    {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }

    function __destruct(){

    }
    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    function setPrice($price)
    {
        if ($price < 0)
            throw new Exception('Invalid price');
        $this->price = $price;
    }

    function printBook()
    {
        echo vsprintf('title : %s, author: %s, price: %d', array($this->title, $this->author, $this->price));
        echo "<br/>";
    }
}

$exploringPhp = new Book('Exploring PHP','XYZ',150);
/*$exploringPhp->setTitle('Exploring PHP');
$exploringPhp->setAuthor('XYZ');
$exploringPhp->setPrice(-150);*/
$exploringPhp->setPrice(250);
$exploringPhp->printBook();


$phpIn24Hrs = new Book('PHP in 24 hrs','EDF',200);
/*$phpIn24Hrs->setTitle('PHP In 24 Hours');
$phpIn24Hrs->setAuthor('EDF');
$phpIn24Hrs->setPrice(150);*/
$phpIn24Hrs->printBook();