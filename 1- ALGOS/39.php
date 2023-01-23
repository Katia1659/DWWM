<?php 

/* 
Toujours sur le meme principe, ecrivez un algoritme permettant, à l'utilisateur de saisir les notes d'une classe.
Le programme, une fois la saisie terminée, ernvoie le nombre de ce notes supérieures à la moyenne de ces notes superieures à la moyenne.
*/

// initialisation des variables

$tab = array();
$moy = 0;
$note = 0;
$som = 0;
$noteValide = 0;
$nb = readline("entrez nombre d'eleves : ");

// boucle pour entrer les notes
for ($i=0; $i <= $nb - 1 ; $i++) { 
    $tab[$i] = readline("entrez notes : ");
    $som = $som + $tab[$i];    
}

// calcule moyenne
$moy = $som / $nb;


//compare moyenne aux notes 
for ($i=0; $i <= $nb - 1 ; $i++) { 
   
    if ($tab[$i] > $moy) {
        $noteValide = $noteValide + 1;

    }
}


echo "moyenne classe : ".$moy."\n";
echo "les notes validées sont : ".$noteValide;


?>
