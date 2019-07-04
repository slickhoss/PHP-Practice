<?php
//json (JavaScript object notation) 
//is a file format that communicates objects and arrays through javaScript
//objectes are denoted within { } and listed with properties
$json = '{"MON":"CLOSED","TUE":"09:00-17:00","WED":"09:00-17:00,19:00-3:00","THU":"09:00-17:00","FRI":"09:00-17:00,22:00-03:00","SAT":"ALL","SUN":"ALL"}';

//we can access jsons in php with json_decode
//it will decode the object and return an array in which we can read
$tmp = json_decode($json);
echo var_dump($tmp) . '<br>';

//if an array has multiple properties we can access through
//=> in a for loop
foreach($tmp as $day => $hours)
{
    echo "<br>" . $day . " " . $hours . "<br>";
}

//to return a json objcect simply call json_encode and pass the appropriate variable
$return = json_encode($tmp);
//displays the contents of json
echo $return; 