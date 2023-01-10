<?php
/* 
Ecrire un algorithme qui demande deux nombres à l'utilisateur et l'informe ensuite si le produit est positif ou négatif (on inclut cette fois le traitement du cas où le produit peut être nul).
Var nb1, nb2, prod; 
    début
        Ecrire "Saisissez un premier nombre";
        Lire nb1;
        Ecrire "Saisissez un deuxième nombre";
        Lire nb2;
        prod = nb1 * nb2; 
        Lire prod
        DebutSi
        Si prod>0 Alors 
            Ecrire "Le nombre est positif";
        Si prod<0 Alors 
            Ecrire "Le nombre est négatif";
        Sinon 
            Ecrire "Le nombre est nul";
        FinSi 
    Fin 

        

$nb1= readline('Saisissez un premier nombre');
$nb2= readline('Saisissez un second nombre');
$prod = $nb1 * $nb2;

if ($prod>0) {
    echo "Le nombre et positif";
} elseif ($prod<0) {
    echo "Le nombre est négatif";
} else { 
    echo "le nombre est nul";

}

*/

$nb1= readline('Saisissez un premier nombre: ');
$nb2= readline('Saisissez un second nombre: ');
$prod = $nb1 * $nb2;

if ($prod>0) {
    echo "Le nombre est positif";
} elseif ($prod<0) {
    echo "Le nombre est négatif";
} else { 
    echo "le nombre est nul";

}


   

?>