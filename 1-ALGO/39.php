<?php
/* Toujours et encore sur le même principe, écrivez un algorithme permettant, à l'utilisateur de saisir les notes d'une classe.
Le programme, une fois la saisie terminée, renvoie le noombre de ces notes à la moyenne de la classe. */

// Initialisation du tableau et des variables
$tab = array ();
$somme = 0;
$count = 0;
$noteSup = 0;
$nbEleve = readline ("Saisisez le nb d'élèves/notes : ");

// 1ere boucle pour rentrer les notes et faire la somme
for ($i =0; $i < $nbEleve; $i++) {
    $tab [$i] = readline ("Enrez la note de l'élève : ");
    $somme += $tab [$i];
}

$moy = $somme/$nbEleve;

// Seconde boucle pour comptabiliser le nb de note > que la moyenne
for ($i =0; $i < $nbEleve; $i++) {
    if ($tab [$i] > $moy) {
        $noteSup += 1; 
    }
}

echo "Il y a $noteSup notes supérieures à la moyenne de la classe ($moy)";
?>