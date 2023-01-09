<?php

/* Ecrire un algorithme qui demande deux nombre à l'utilisateur et l'informe ensuite 
si leur produit est négative ou positive (on inclue ou le produi est nul )

*/
// Déclaration de variable saisie par l'utilisateur

$a = readline ('saisie un nombe : ');
$b = readline ('saisie un autre nombe : ');

// conditions imbriquer :

if ($a == 0 or $b ==0) {
   print 'Produit Nulle';
} else {
    if (($a>0 and $b>0 )  or ($a<0 and $b<0))  
         {print 'Le produit est Positif ';    }   
    else {print 'Le produit est Négatif';    } 
}

?>