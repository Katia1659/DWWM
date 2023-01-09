<?php 
/*Ecrire un algorithme qui demande un nombre à l'utilisateur, 
et l'informe ensuite si ce nombre est positif ou négatif 
(on laisse de coté ou le nombre vaut zéro) 
Variable 
nbr en numérique 

début 
ecrire "saisie un nombre" 
lire nbr 

si  (nbr >0) alors faire ecrire "nombre Positive"

sinon ecrie "Nombre négative"

*/
// Déclaration de variable
$nbr= readline(" saisie un nombre : ");


// condition  :

if ($nbr >0)
    print 'nombre Positive';
else
    print 'nombre Négative';

?>