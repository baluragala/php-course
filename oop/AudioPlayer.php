<?php
/**
 * Created by PhpStorm.
 * User: baluteju
 * Date: 3/7/2017
 * Time: 7:50 PM
 */

abstract class AudioPlayer {
    function start(){

    }

    function stop(){

    }

    abstract function eject();
}

abstract class SonyPlayer extends AudioPlayer{

}



