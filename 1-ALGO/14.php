<?php
/* 
Ecrire un algorithme qui demande un nombre à l'utilisateur et l'informe ensuite si leur produit est positif ou négatif (on laisse de côté le cas où le produit est nul). Attention toutefois : on ne doit pas calculer le produit des deux nombres.
Var nb1, nb2; 
    début
        Ecrire "Saisissez un premier nombre";
        Lire nb1;
        Ecrire "Saisissez un deuxième nombre";
        Lire nb2;
        DebutSi
        Si (nb1>0 et nb2>0) OU (nb1<0 et nb2<0) Alors 
            Ecrire "Le nombre est positif";
        Sinon
            Ecrire "Le nombre est négatif";
        FinSi 
        Fin 

$nb1= readline('Saisissez un premier nombre');
$nb2= readline('Saisissez un second nombre');

if (nb1>0 and nb2>0) or (nb1<0 and nb2<0) {
    echo "Le nombre et positif";
} else { 
   echo "Le nombre est négatif";

}

*/

$nb1= readline('Saisissez un premier nombre');
$nb2= readline('Saisissez un second nombre');

if (($nb1>0 and $nb2>0) or ($nb1<0 and $nb2<0)) {
    echo "Le nombre et positif";
} else { 
   echo "Le nombre est négatif";
   }
   

?>