<?php

function displayDice($img) {
    echo '<table id="Tabel_01" width="620" border="0" cellpadding="0" cellspacing="0">' ; 
    
    echo '<tr>'
          .'<td>'
           .'<img id="dice1" src="'. $img .'" width="206" height="204" alt="" />'
            .'</td>'
             .'</table>';
}


function check_for_play($dice1, $dice2){
  
        if(isset($_POST['roll'])){
        
            $poging = rand(1, 6);
            $poging2 = rand(1, 6);
    
            ?><div id="dice1">  
            <?php echo $dice1->roll_dice($poging); ?>
              </div> 
              <div id="dice2">  
            <?php echo $dice2->roll_dice($poging2); ?>
              </div> 
            <?php

        }else {
            echo $_POST['roll'] = "";
        }   
}


