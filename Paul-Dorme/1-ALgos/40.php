<?php 

/* Tableau à deux dimensions (12,8) préremplit. Chercher la plus grande valeur du tableau*/


$tab = array ();
$max = 0;

//Remplissage tableau
    for ($i = 0; $i < 12; $i++) {      

    for ($j = 0; $j < 8; $j++) {
        $tab[$i][$j] = rand(0,30);

        
        }
    }

// Affichage tableau
for ($i=0; $i < 12; $i++) { 

    for ($j=0; $j < 8; $j++) {
 if ($j < 7) {
      echo $tab[$i][$j].'|';
        } else {
            echo $tab[$i][$j]."|\n|";
        }
// if ($tab[$j] and $tab[$i] < 10) {
//     echo $tab[$i][$j]."   ";
// }
       

     
    
    
}
}

// Trouver le max
for ($i=0; $i < 12; $i++) { 

    for ($j=0; $j < 8; $j++) {
    
        if ($tab[$i][$j] >  $max) {
            $max = $tab[$i][$j];
        }

    }}

echo 'Maximum = '.$max
?>