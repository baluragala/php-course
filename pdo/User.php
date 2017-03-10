<?php

/**
 * Created by PhpStorm.
 * User: baluteju
 * Date: 3/9/2017
 * Time: 5:46 PM
 */
class User
{
    public $id;
    public $first_name;
    public $last_name;
    public $email;
    public $password;

    function show()
    {
        echo 'SHOW<br/>';
        echo $this->id . "," . $this->email;
    }
}