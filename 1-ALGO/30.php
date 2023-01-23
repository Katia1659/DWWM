<?php
/**Donnez le résultat de la multiplication de deux nombre en ne faisant que des addition  */

// déclaration variables 

$a=readline('Donner nombre1: ');
$b=readline('Donner nombre2: ');


$res=0;

// boucle pour faire l'addition en $a nombre de fois !

for ($i=1; $i <= $a ; $i++) { 
   $res+= $b;
}

print "résultat $a x $b = $res";
?>