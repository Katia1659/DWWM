<?php 

/* 
ecrire un algorithme permettant d'imprimer le triangle suivant, le nombre de lignes etant donné par l'utilisateur: 
1
12
123
1234
...



*/
// nb permet d'enregistrer une valeur 
$nb = " ";
$nb1 = readline("entrez un nombe : "); 

// permet de créer le triangle 
for ($i=1; $i <= $nb1; $i++) {    
    $nb = $nb.$i;  
    echo $nb."\n";
}

echo "Fin";

?>

