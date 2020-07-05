<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>

    <body>

        
            <?php 
                $fnam =  $_SESSION['fname'];
                $lnam =  $_SESSION['lname'];
            ?>  
        <div class = "cng_mssg">
            
          <h2 id ="cong_mssg"> Congratulation <?php echo ($fnam); echo ($lnam ) ?> For successfully signup.<h2>
        </div>

    </body>
</html>