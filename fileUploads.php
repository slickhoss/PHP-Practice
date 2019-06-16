<?php
    //can verify $_FILES has been posted by  
    //file_exits() - pass the target files tmp name
    //count() - pass $_FILES 
    //isset() - target file variable
    if(file_exists($_FILES['fileUpload']['tmp_name']))
    {   
        //$_FILES properties
        echo $_FILES['fileUpload']['name'] . "<br>"; //uploaded name
        echo $_FILES['fileUpload']['tmp_name'] . "<br>"; //tmp saved name
        echo $_FILES['fileUpload']['type'] . "<br>";
        echo $_FILES['fileUpload']['size'] . "<br>";

        //select the directory where we want to save
        $targetDirectory = 'uploads/';//must already exist in local filesystem
        $savedLocation = $targetDirectory . $_FILES['fileUpload']['name'];//the final location we want to save the file 

        if(move_uploaded_file($_FILES['fileUpload']['tmp_name'], $savedLocation))
        {
            echo 'file was successfully posted';
        }
        else
        {
            echo 'file was not posted';
        }    
    }
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
        <title>
            File Uploads
        </title>
    </head>
    <body>
     <!--forms must have enctype=multipart/form-data for $_FILES to populate-->   
    <form action="fileUploads.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileUpload">
        <div>
            <input type="submit" name="submit" value="submit">
        </div>        
    </form>

    </body>
</html>