<?php
/* Ecrivez un algo qui permet la saisie d'un nombre quelconque de valeurs. Toute les valeurs doivent être augmenter de 1 et l'afficher dans un new */




$nbV = readline ('Nombre de valeurs ? -> ');

// Initialisation variables
$tab = array ();
$tab2 = array ();

//Remplissage tableau
for ($i=1; $i <= $nbV; $i++) { 
    $nb = readline ("Entrez un nombre ->");
    $tab[$i] = $nb;
    
}

//Ajout de 1
for ($i=1; $i <= $nbV; $i++) { 
    $tab2[$i] = $tab[$i]+1;
    echo $tab2[$i]."\n";
}

?>