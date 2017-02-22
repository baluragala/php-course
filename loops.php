<?php
/*
while
do..while
for
foreach
*/
echo "\r\n";
echo "****WHILE*****\r\n";
$n=100;
while($n<=10){
	echo $n++ . "\r\n";
}

echo "****DO-WHILE*****\r\n";
$n=100;
do{
	echo $n++ . "\r\n";
}while($n<=10);

echo "****FOR*****\r\n";
for($n=10;$n>=1;$n--){
	echo $n . " ";
}

echo "****FOR - ARRAY*****\r\n";
$numbers=[1,2,3,4,5,6];
for($c=0;$c<count($numbers);$c++)
{
	echo $numbers[$c] . "   ";
}

echo "****FOREACH - ARRAY*****\r\n";
foreach($numbers as $ele){
	echo $ele . "    ";
}


?>