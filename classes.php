<?php
class Dice {
    
    public $nummer;
    
    public function __construct($nummer){
        $this->nummer = $nummer;
    }
 
    public function roll_dice($poging){
            $img_name = "dice_";
            
            switch ($poging){
                case 1 : echo displayDice("img/".$img_name."01.png");
                         break;
                
                case 2 : echo displayDice("img/".$img_name."02.png");
                         break;
                
                case 3 : echo displayDice("img/".$img_name."03.png");
                         break;
                
                case 4 : echo displayDice("img/".$img_name."04.png");
                         break;
                
                case 5 : echo displayDice("img/".$img_name."05.png");
                         break;
                     
                case 6 : echo displayDice("img/".$img_name."06.png");
                         break;       
                    
            }
    }
}
