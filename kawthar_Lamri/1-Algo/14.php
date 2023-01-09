<?php

/* Ecrire un algorithme qui demande deux nombre à l'utilisateur et l'informe ensuite 
si leur produit est négative ou positive (on laisse de coté ou le produi est nul )

*/
// Déclaration de variable
$a = readline ('saisie un nombe : ');
$b = readline ('saisie un autre nombe : ');

// condition (a & b) or (c and d) :

if (($a>0 and $b>0 )  or ($a<0 and $b<0))  
     {print 'Le produit est Positif ';} 

else {print 'Le produit est Négatif';} 
?>