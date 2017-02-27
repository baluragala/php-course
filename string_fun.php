<?php
/**
 * Created by PhpStorm.
 * User: baluteju
 * Date: 2/27/2017
 * Time: 9:13 PM
 */

$name='Zeo Learn    l';
$message="<pre>Hello $name World</pre>";
$message1='Hello $name World';
$message2=<<<TN
    <div>
        <h1>This is a text from $name</h1>
        <h1>This is a text from heredoc</h1>
    </div>
TN;


/* functions */

function format($str){
    echo "<br/>*******************<br/>";
    echo $str;
}

format(strlen($name));
format(str_word_count($name));
format(strrev($name));
format(strpos($name,"Learn"));
format(str_replace("Learn","$$$$",$name));
format('Zoe' . ' ' . 'Learn');
format(join("*",array("Hello","Strings","are","awesome")));
format(strlen("      Zeo        "));
$tmp=trim("      Z e o        ");
$tmp=rtrim(ltrim("      Z e o        "));
format(strlen($tmp));
format(str_repeat(" + ",13));
format(strtolower("AAAAAAA"));
format(strtoupper("sadsaf"));
format(substr("Hello World",-4));
format(substr("Hello World",2));
format(ucfirst("hello world"));
format(ucwords("hello world"));
format(vsprintf("My name is %s and I know %d languages",array("balu",-13)));
format(htmlentities('<a href="https://www.google.com"> Google </a>'));
format(implode("->",array("Php","is","awesome")));
format("");
print_r(explode(",","This,is,a,great,feature"));
print_r(str_split("This,is,a,great,feature"));


/*
 * %%
 * %b -binary
 * %d - decimal
 * %c - character
 * %e - 12e+2
 * %E - 12E+2
 * %u - usigned
 * %f
 * %F
 * %s - string
 * %o - octal
 * %x - hex
 * %X - hex
 */