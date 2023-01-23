<?php
/*Donner un algorithme qui prend en argument un tableau d'entiers
de taille n et qui le modifie de tels sorts que tous les entiers pairs
se retrouvent avant les entiers impairs.
*/

//On définie le tableau et les variables
$tab =array();
$n = readline('Quel est la taille du tableau ?');
$permut = 1;
$pass = 0;

//On crée un tableau

for ($j=0; $j < $n ; $j++) { 
    $tab[$j] = random_int(10,20);
   }

//On renvoie le premier tableau dans le désordre
echo 'Tableau avec les pairs au début : '."\n";
for ($j=0; $j < count($tab); $j++) { 
    echo $tab[$j].' | ';

}

//On tri avec un tri à bulle
while ($permut==1) {
    $permut = 0;
    $pass++;
    for ($i=0; $i < count($tab)-$pass ; $i++) { 
        if ($tab[$i]%2==1 and $tab[$i+1]%2==0) {
            $permut= 1;
            $temp =$tab[$i];
            $tab[$i]=$tab[$i+1];
            $tab[$i+1]=$temp;
        }
    }
}
//On renvoie le tableau avec les nombres pair au début
echo "\n".'Tableau avec les pairs au début : '."\n";
for ($j=0; $j < count($tab); $j++) { 
    echo $tab[$j].' | ';    
}
?>