<?php 
//multiple ways to read from a file

//1
if(file_exists("file.txt"))//if the file exist
{
    $readData = file("file.txt");//store in array
    echo $readData[0] . '<br>';//each line has its own element
    echo $readData[1] . '<br>';
}

//2
$fp = fopen('file.txt', 'r+');//create a filepointer, pass file name and open type
while(!feof($fp)) //while the file is not at the end
{
    $line = fgets($fp);//reads pointer line by line
    echo $line . '<br>';
}
?>
