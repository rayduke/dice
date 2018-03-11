<?php

function displayDice($img) {
    echo '<table id="Tabel_01" width="620" border="0" cellpadding="0" cellspacing="0">' ; 
    
    echo '<tr>'
          .'<td>'
           .'<img id="dice1" src="'. $img .'" width="206" height="204" alt="" />'
            .'</td>'
             .'</table>';
}


function gameplay($dice1, $dice2){
  
        if(isset($_POST['roll'])){
                        
            $poging = rand(1, 6);
            $poging2 = rand(1, 6);
            $score = 0;

            
                      
            ?><div id="dice1">  
            <?php echo $dice1->roll_dice($poging); ?>
              </div> 
              <div id="dice2">  
            <?php echo $dice2->roll_dice($poging2); ?>
              </div> 
            <?php
           
            if(($poging == 6 && $poging2 == 6) || ($poging == 1 && $poging2 ==1 ) 
                || ($poging == 4 && $poging2 == 4 ) || ($poging == 5 && $poging2 == 5 )) {
                echo opdrachten();
            }
           
        }else {
            echo $_POST['roll'] = "";            
        } 
     
}

function opdrachten(){
    $opdrachten = ['Neem een flinke slok', 'Drink je buurmans glas op'
                    .'', 'Vertel een mop', 'Kies wie er drinkt', 'Drink je glas '
                     . 'ondersteboven leeg', 'Neem een shot', 'Kies twee mensen'
                       . ' die moeten drinken','Speler links van jouw moet drinken '
                        . '', 'Drink het aantal slokken dat je gegooid hebt'];
    
    echo '<div style="background: rgba(0, 0, 0, 0.8);color: white;position: '
          . 'absolute;bottom: 250px;width: 100%;text-align: center;font-size:60px;">';
    echo $opdrachten[array_rand($opdrachten)];
    echo "</div>";
    
}


