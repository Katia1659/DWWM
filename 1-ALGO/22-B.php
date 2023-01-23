<?php
// Modifiez l'algo pour qu'il affiche la position du nb max

$max = 0;

for ($i=1; $i <= 20 ; $i++) {
    
    $nb = readline ('Entrez un nombre -> ');

    if ($nb >  $max) {
        $max = $nb;
        $posi = $i;
    }

   
}

echo 'Maxi = '.$max."\n";

echo 'Postion de maxi ='.$posi;
?>