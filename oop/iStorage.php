<?php
/**
 * Created by PhpStorm.
 * User: baluteju
 * Date: 3/7/2017
 * Time: 8:01 PM
 */

interface iStorage {
    function create();
    function read();
    function update();
    function delete();
}