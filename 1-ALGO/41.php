<?php 

/* Ecrire l'algo effectuant le décalage des éléments d'un tableau */

$tab = array ('D','E','C','A','L','A','G','E');
$tab2 = $tab [0];

for ($i=1; $i < count($tab)-1; $i++) { 
    $tab[$i] = $tab[$i]+1;
}
        
$tab2 = $tab [7];
for ($i=1; $i < count($tab); $i++) { 
   
echo $tab[$i];
}


?>