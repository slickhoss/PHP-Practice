<?php
$var1 = "hello world";//defining variables
$var2 = "my name is" . "Andre Hoong <br>";//string concatnation

echo $var1;//printing output to screen
echo "<br>";//we can also echo html elements

$var3 = 'true';
$var4;

//isset returns true if the variable is defined
if(isset($var3))
{
    echo "variable 3 is set <br>";
}
else
{
    echo "variable 3 is not set<br>";
}

//returns false as var4 is not defined
if(isset($var4))
{
    echo "variable 4 is set<br>";
}
else
{
    echo "variable 4 is not set<br>";
}

//array declaration
$array = [];
$array[0] = 'zero';
$array[1] = 'one';
$array[2] = 'two';
$array[3] = 'three';
$array[4] = 'four';

//for loop to iterate through array
foreach($array as $num)
{
    echo $num;
    echo "<br>";
}

//arrays can hold multiple data types in php
//they can also hold strings as the indexes key
$array['name'] = "array value with key string";
echo $array['name'];
?>