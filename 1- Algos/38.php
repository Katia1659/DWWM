<?php
/* Ecrivez un algorithme permettant, toujours sur le même principe, à l'utilisateur de saisir un nombre déterminé de valeurs. Le programme, une fois la saisie terminée , renvoie la plus grande valeur en précisant quelle position elle occupe dans le tableau. On prendra soin d'effectuer la saisie dans un premier temps, et la recherche de la plus grande valeur du tableau dans un second temps. */


$tab=array();
$nb=readline('Combien voulez-vous de valeurs dans votre tableau? : '); 
$pg=0;
$place=0;

for ($i=0; $i < $nb ; $i++) { 
    $tab[$i]=readline('la valeur : ');
    if ($tab[$i]>$pg) {
        $pg=$tab[$i];
        $place=$i+1;
    }
    
}
echo "ce nombre se trouve en position : ".$place;

?>