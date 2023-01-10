<?php
/*
Les habitants de paris paient l'impôt selon les règles suivantes :
- les hommes de plus de 20 ans paient l'impôt
- les femmes paient l'impôt si elles ont entre 18 et 35 ans
- les autres ne paient pas d'impôt
Le programme demandera donc l'âge et le sexe du parisien, et se
prononcera donc ensuite sur le fait que l'habitant est imposable.
*/

//inisilation des var
$sexe = '';
$age = '';
echo 'debut';
echo "\n"; 
$age = readline('Donnez lage');
$sexe = readline('donnez le sexe [F/H]');

// creation des if/else
if ($sexe = 'H' ){
    if ($age <= 20 ){
        echo 'imposable';
    }
} else;
    if($sexe = 'F'){
        if($age >= 18 and $age <= 35){
            echo 'imposable';
        } else 
            echo 'non imposable';
    }
        
?>