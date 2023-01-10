<?php
/**Toujour et encore sur le m^me principe, ecrivez un algorithme permettant, à l'utilisateur de saisir les notes d'une class.
 * Le programme, une fois la saisie terminée, renvoie le nombre de ces notes supérieures à la moyenne de la classe.
 */
echo "Début \n";

//  Déclaration des variables :
$tab=array();
$pg=0;
$k=0;
$som=0;
$moy=0;

// La boucle:
$n =readline("combien voulez vous entrer de Valeurs ?: ");
for ($i=1; $i <=$n ; $i++) { 
    $tab[$i] = readline("valeur n°: $i = ");
    $tab[$i]=$tab[$i] +1;
    // au meme temps on détermine la somme des notes pour calculer la moyenne.
    $som=$som+$tab[$i];
}

// Calculer la moyenne du classe:
$moy=$som/$n;

echo "\n";

// Déterminet le nombre des notes > à la moyenne :
for ($i=1; $i <=sizeof($tab) ; $i++) { 
    if ($tab[$i]>$moy) {
        $k=$k+1;
    }
    
}
$moy=round($moy,2);
//Affichage:
print "$moy est la moyenna de la classe, il y'a $k notes supérieurs à la moyenne \n";
echo "Fin";
?>