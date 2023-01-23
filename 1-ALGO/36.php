<?php 
/* Toujours à partir de 2 tab ecrire un algo qui calcul schtroumpf de 2 tab 
. Pour calculer schtroumpf il faut multiplier chaque élément du tab 1 par chaque élément du tab 2 et additionner le <tout></tout>*/

//Déclaration tableau
$tab1 = array (2,5,8,4);
$tab2 = array (6,7);

// Initialisation variables à 0
$total = 0;
$total2 = 0;

// Calcul
for ($i=0; $i <= 3; $i++) {  
        $result = $tab1[$i] * $tab2[0];
     $total = $total + $result;
    }

for ($i=0; $i <= 3; $i++) {  
        $result2 = $tab1[$i] * $tab2[1];
        $total2= $total2 + $result2;
    }


$result3 = $total + $total2;
   


echo 'Le Schtroumpf est de '.$result3;
    echo "\n";


?>