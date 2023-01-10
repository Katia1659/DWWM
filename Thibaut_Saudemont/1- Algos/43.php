<?php
 /* 
Ecrire un algorithme qui permet d'inverser un tableau
*/

echo 'Début';
echo PHP_EOL;
$temp = 0;
$tab = array (14, 3, 9, 2, 5);
for ($i = 0; $i < sizeof($tab); $i++) { 
    echo $tab[$i]. ' ';
}

for ($i= 0 ; $i < sizeof($tab) ; $i++) { 
    for ($j = 0 ; $j <= 0 ; $j++) { 
       

        $temp = $tab[$i];
        $tab[$i] = $tab[$j];
        $tab[$j] = $temp;

    }
}



echo PHP_EOL;
for ($i = 0; $i < sizeof($tab); $i++) { 
    echo $tab[$i]. ' ';
}
echo PHP_EOL;
echo 'Fin';
?>
