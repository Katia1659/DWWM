<?php 
/**Ecrire  un algorithme qui demande un nombre de départ, et qui calcule sa factorielle.
 * 
 * Variable n,i,f entier 
   f<-1
   ecrire "Donner un nombre"
   lire n 

   pour i allant de 2 à n faire 
   f<-f*i;
   fin pour 

   ecrire " le factoriel ! du "+n+"est : "+f;
*/

// Déclaration de variable
$n= readline("donner un nombre ");

$f=1;
$i=1;

// Factoriel:

while ($i <= $n) {
    
    $f=$f*$i;
    echo "$i x";
    $i++;
    
}

echo" =$n! \n";
echo "$n!=$f";
?>