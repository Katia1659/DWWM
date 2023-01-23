<?php 
/**toujour à partire de deux tableaux pécédement saisie, écrivez un algorithme qui calcule le schtroumph des deux tableaux.
 * Pour calculer le shtroumpf, il faut multiplier chaque élément du tabbleau 1 par chaque élément du tableau 2, et additionner le tout.
 */

 echo "Début \n";
//  Déclaration des tbleaux.

$tab1=array(2,5,8,4);
$tab2=array(6,7);
$tab3=array();

// Boucle pour calculer le shtrompf :
$shtph=0;


// Construction du Tab3
$k=0;
for ($i=0; $i <sizeof($tab2); $i++) { 
   for ($j=0; $j <sizeof($tab1) ; $j++) { 
    $tab3[$k++]=$tab2[$i]*$tab1[$j];
        
    }
}

// cAlcule du shtroumpf

// for ($i=0; $i <= count($tab3)-1 ; $i++) { 
//    $shtph=$shtph+$tab3[$i];
// }

print "tableau 1 :". implode("|",$tab1)."\n";
print "tableau 2 :". implode("|",$tab2)."\n";
print "Le schtroumpf des deux tableaux est : ". implode(" + ",$tab3)." =  $shtph \n";
echo "Fin";
?>