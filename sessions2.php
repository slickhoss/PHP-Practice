<?php
session_start();
?>
<!DOCTYPE html>
<html> 
    <body> 
        <?php
            if(isset($_SESSION['VAR1']) && isset($_SESSION['VAR2']))
            {
                echo 'Variables are set : ' . $_SESSION['VAR1'] . ' ' . $_SESSION['VAR2']; //accessing variables set from another page
            }
        ?>
    </body>
</html>