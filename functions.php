<html>
<head></head>
<body>
<form method="get">
    <label>Enter number1 :</label>
    <input type="text" name="num1"/>
    <label>Enter number2 :</label>
    <input type="text" name="num2"/>
    <input type="hidden" name="token" value="secret"/>
    <label>Result : </label>  <?php echo add(); ?>
    <input type="submit" value="Submit"/>
</form>
<body>
</html>
<?php
/*
 * pass by value
 * pass by reference
 */

$a = 10;
function double(&$b)
{
    $b = $b * 2;
}

echo double($a);
echo $a;

function add($a = 10, $b = 20)
{
    return $a + $b;
}

$addition = 'add';

$t = function () {
};
echo $addition();



?>