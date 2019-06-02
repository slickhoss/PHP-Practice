<?php 

//function definition
function test ($param1)
{
    echo $param1;
    echo "<br>";
}
test("Test function");//calling function with supplied param

//Uppercase first letter of word
function formatWord ($param1)
{
    return ucfirst($param1);
}
echo formatInput("test<br>");

//Uppercase first letter of each word in input 
function formatInput($param1)
{
    return ucwords(strtolower($param1));
}
echo formatInput("my name is hoong andre<br>");
?>