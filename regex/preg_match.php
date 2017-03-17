<?php
$line = "Vi is the greatest word processor ever created!";
// perform a case-Insensitive search for the word "Vi"

if (preg_match("/\bVi\b/i", $line, $match)) {
    print "Match found!";
} else {
    print "No Match found!";
}

var_dump($match)
?>