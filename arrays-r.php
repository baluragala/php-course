<?php
/**
 * Created by PhpStorm.
 * User: baluteju
 * Date: 2/24/2017
 * Time: 8:50 PM
 */

$person = array(
    "name" => "balu",
    "age" => 20,
    "hobbies" =>['browsing'=>["tech","movies"],
                'chatting', /* 0 */
                'swimming'=>["front","back"],
                'playing games'] /* 1 */
);



$person["hobbies"]['browsing']=[];

$person["friends"]=['pamela','krish'];

//print_r(array_values($person));

