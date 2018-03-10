<?php
include ('functions.php');
include ('classes.php');

$dice1 = new Dice("");
$dice2 = new Dice("");
echo check_for_play($dice1, $dice2);

?>

<!DOCTYPE HTML>
<html>

    <head>
        
    </head>
    <body>
        <form method="post" action="index.php">
        <input type="submit" name="roll" value="roll">
    
        
        </form>
    </body>
    

</html>