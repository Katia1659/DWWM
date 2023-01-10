<?php 
// Ecrire un algo qui demande successvment 20 nb puis le + grand des 20 nb


$max = 0;

for ($i=0; $i <= 20 ; $i++) {
    
    $nb = readline ('Entrez un nombre -> ');

    if ($nb >  $max) {
        $max = $nb;
    }
   
}



echo 'Maxi = '.$max;

?>