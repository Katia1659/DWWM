<?php 

/* 
Donnez le resultat de la multipication de deux nombres en ne faisant que des additions.

*/
//demande à l'utilisateur d'entrer des nombres
$nb = readline("entrez un nombre : ");

// initialise ma somme a 0
$som = 0;

//donne le produit d'un nombre en l'additionnant 
for ($i=1; $i <= $nb ; $i++) { 
    $som = $som + $nb;
}

// aficher le resultat
echo $som."\n";

echo "fin";

?>