<?php
/*Ecrire l'algorithme permettant d'imprimer le triangle suivant, le
nombre de lignes étant donné par l'utilisateur :
1
12
123
1234
12345
123456
1234567

On utilise donc une boucle for imbriqué dans une boucle for avec v donner par l'utilisateur,
par la suite on écrit un compteur qui ajoute 1 à chaque tour et les alignes à la suite.
*/

//Saisie de valeur
$v = readline ('Donnez le nombre de valeur du triangle : ');
//Création de la boucle imbriqué qui permet de crée le triangle
for ($i=0; $i < $v+1 ; $i++) { 
    $c = 0;
    echo "\n";
    for ($i2=1; $i2 < $i+1 ; $i2++) { 
        $c = $c + 1;
        echo $c;
    }
    
}



?>