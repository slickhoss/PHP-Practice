<?php
session_start(); // must be called before any html
?>

<!DOCTYPE html>
<html>
    <body>
        <?php 
            $_SESSION['VAR1'] = 'variable 1'; //variables set can be accessed by any page within the directory
            $_SESSION['VAR2'] = 'variable 2';
            echo 'session variables are set';
        ?>
    </body>
</html>
