<?php
/*
Ecriverz un algorithme permettant la saisie d'un nombre quelconque de valeurs. Toutes les valeurs doivent être ensuite augmenté de 1, et le nouveau tableau sera affiché à l'écran.
*/
// Création de 2 tableaux
$tab = array ();
$tab2 = array ();

// Boucle pour incrémenter $tab puis incrémenter $tab2
for ($i=0; $i <= 6; $i++) {
    $tab [$i] = readline ("Entrez un nombre : ");
    $tab2 [$i] = $tab[$i] + 1;
}

// Affichage de $tab2
for ($i=0; $i <= 6; $i++) {
    echo $tab2 [$i];
    echo "\n";
}
?>