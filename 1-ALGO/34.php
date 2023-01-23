<?php 
//Ecrivez un algo calculant la somme des valeurs d'un tableau 


//Initialisation du tableau
$tab = array (5, 10, 7, 3, 20);

$somme = 0;

//Calcul de la somme
for ($i=0; $i < $tab[$i]; $i++) { 
    $somme = $somme + $tab[$i];

}

// foreach ($tab as $valeur) {
//     $somme += $valeur;
// }

//Affichage somme
echo 'Somme du tableau = '.$somme;
?>