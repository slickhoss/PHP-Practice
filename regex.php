<?php 

//function to check if a string was provided
function checkString ($param1)
{
    if(empty($param1))
    {
        return false;
    }
    else
    {
        return true;
    }
}
$var1 = "";
$var2 = "string";
echo checkString($var1)."<br>";
echo checkString($var2)."<br>";


//function to check input consist only of a-z characters
function regexString ($param1)
{
    //patterns are defined within /^/
    $regexPattern = '/^[a-z]/'; //ensures only a-z characters lowercase
    $regexPattern1 = '/^[A-Z]/'; //A-Z uppercase
    $regexPattern2 = '/^[a-z][A-Z]/';//uppercase or lowercase
    
    //test patterns with preg_match
    if(preg_match($regexPattern, $param1))
    {
        echo 'Input only has characters [a-z]<br>';
    }
    elseif(preg_match($regexPattern1, $param1))
    {
        echo 'Input only has characters [A-Z]<br>';
    }
    elseif(preg_match($regexPattern2, $param1))
    {
        echo 'Input has characters [a-z][A-Z]<br>';
    }
    else
    {
        echo 'No match was found<br>';
    }
}
$var3 = 'abc';
$var4 = 'ABC';
$var5 = 'Abc';
$var6 = '123';
regexString($var3);
regexString($var4);
regexString($var5);
regexString($var6);

?>