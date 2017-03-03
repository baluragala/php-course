<?php
/**
 * Created by PhpStorm.
 * User: baluteju
 * Date: 2/24/2017
 * Time: 9:05 PM
 */

$input = ["a"=>1,"b"=>2,"c"=>3,4,5,6];

//print_r(array_chunk($input,2,true));

/*$a1=['name','age'];
$a2=['balu',30];

$r=array_combine($a1,$a2);*/

//$numbers=["a1"=>1,"b1"=>2];
//$numbers1=["a1"=>1,"b1"=>2];

//print_r($numbers);
echo "<br/>";
//print_r(array_count_values($numbers));

//print_r(array_diff($numbers1,$numbers));

//print_r(array_diff_assoc($numbers1,$numbers));

//print_r(array_diff_key($numbers,$numbers1));

//$balls = array_fill(0,10,'Tennis Ball');
//$balls[5]="Cricket";
//print_r($balls);

$numbers=[3,4,5,6,7,8,9,10];
$numbers1=['a','a','a1','a','a','a','a','a','a'];

function even($n){
    return ($n % 2) == 0;
}

function odd($n){
    return !even($n);
}

$r=[];
function double($n){
    array_push($GLOBALS['r'],$n*2);
}
//print_r(array_filter($numbers,'odd'));

//print_r(array_flip($numbers));
array_walk($numbers,'double');
//print_r($r);


$pops=["jazz"=>"STEP UP","pop"=>"ONE MORE","ROCK"=>"BLOW UP"];
print_r(array_change_key_case($pops));



//just a test