<?php
echo 'This is conditonals';
echo "\r\n";
echo 1 == 1;
echo "\r\n";
echo 1 == "1";
echo "\r\n";
echo True;
echo "\r\n";
echo false;

/*
if
if..else
if..elseif..else
switch
*/

if(1){
	echo 'I am if body';
}

echo "\r\n";
if(null){
	echo 'I am if body';
}else{
	echo 'I am else body';
}

echo "\r\n";

$x=10;
$y=20;

echo ($x > $y ? 'x is grt' :  'y is grt');

echo "\r\n";


$a=100;
$b=20000;
$c=15;

if ($a > $b && $a > $c){
	echo $a . ' $a is greater';
}elseif($b > $c && $b > $a ) {
	echo $b . ' $b is greater';
}else{
	echo $c . ' $c is greater';
}

echo "\r\n";
$day=20;
switch($day){
	case 1:
	case 2:
	case 3:
	case 4:
		echo 'Monday';
		break;
	case 10:
		echo 'Tuesday';
		
	default:
	    echo 'Invalid Choice';
}


?>