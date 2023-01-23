<?php
/**Algorithme effectuant le décalage des élément d'un tableau  */
 echo "Début \n";

// declaration du tableau :

 $tab= array('D','E','C','A','L','A','G','E');

// boucle décalage:


    for ($j=1; $j <sizeof($tab) ; $j++) { 
        
        $pg= $tab[$j-1] ;
        $tab[$j-1]=$tab[$j];
        $tab[$j]= $pg;
        
    }

// boucle affichage :

    for ($i=0; $i < sizeof($tab) ; $i++) { 
        echo "-".$tab[$i];
    }

echo 'fin';
?>