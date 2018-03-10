<?php
session_start();
if(isset($_POST['restart'])){
    session_destroy();
          header("Refresh:0");
}

include ('functions.php');
include ('classes.php');


?>

<!DOCTYPE HTML>
<html>

    <head>
      <script>
            var audio = new Audio('audio/dicefx.mp3');
            audio.play();
      </script>

        <link rel="stylesheet" media="all" href="style.css"/>            
    </head>
    <body>
        <?php 
        $score = 0;
        
        if (isset($_POST['roll'])){

        } else {
            $_POST['roll'] = "";
        }
            

            $dice1 = new Dice("");
            $dice2 = new Dice("");
            
            echo gameplay($dice1, $dice2); 

        ?>
        
        
        
        
        <form method="post" id="form" action="index.php" name="form">
     
      
            <input type="submit" name="roll" value="roll" size="50px" onclick="play()">
          <input type="submit" name="restart" value="restart" onclick="play()">
         <audio id="audio">
          <source src="audio/dicefx.mp3" type="audio/mpeg">
         </audio>

      
 
            
        </form>
    </body>
    

</html>