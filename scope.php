<?php
$name='balu';

function destroy_name(){
	unset($GLOBALS['name']);
	var_dump($GLOBALS);
}

destroy_name();

/*
function test(){
	static $a=10;
	echo $a;
	echo '</br>';
	$a++;
}

test();
test();
test();
*/
?>