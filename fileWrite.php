<?php 
    //we must define a file pointer to write
    //use fopen(fileName, openType)
    $fp = fopen('fileWrite.txt', "a+");
    fwrite($fp, 'Test writing');//call fwrite pass our fp and our string

    //open types
    // r    - only for reading
    // r+   - for reading and writing, pointer starts at the beginning of file
    // w    - only for writing, pointer starts at the beginning and truncates file to zero length, will create file if it does not exist
    // w+   - reading and writing   ''
    // a    - only for writing, starts at end of file, will create if file does not exist 
    // a+   - reading and writing ''
    // x    - use for creating new file and writing only, will fail is a file already exists
    // c    - used for writing identical to w but does not truncate file length
    // c+   - used for reading and writing ''
?>