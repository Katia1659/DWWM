<?php

/*REGLE IMPÔtS :
- homme +20 paye
- femme paye si entre 18 et 35
-autres paye pas

ask sex and age et dire imposable ou non ?*/

$age = readline ('Entrez votre age :'); $sexe = readline ('Entrez votre sexe :');  
//conditions 
if ($age > 20 && $sexe == 'h') {     
    echo ' vous payez des impots'; }
    elseif ($age<18 and $age>36 and $sexe=='f') {     
        echo 'vous payez des impots'; }
        else { 
            echo 'vous ne payez pas dimpot'; }


?>