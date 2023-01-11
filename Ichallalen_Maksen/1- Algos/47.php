<?php
/*Donner un algorithme pour supprimer un élément donné d'un
tableau d'entiers.


*/
//On définit les valeur et le tableau
$tab = array(2,4,9,1,3,8,4);
$supp = readline('Quelle valeure voulez vous supprimer ? ');


//On écrase la valeur à supprimer et décale le tout vers la gauche
for ($i=$supp; $i < count($tab)-1 ; $i++) { 
        $tab[$i]= $tab[$i+1];
}

// for ($i=0; $i < count($tab) ; $i++) { 
//     if ($i==$supp) {
//         $tab[$i]= $tab[$i+1];
//     }elseif ($i>$supp) {
//         $tab[$i]= $tab[$i+1];        
//     }    
// }
//On supprime la dernière valeur du tableau
unset($tab[sizeof($tab)-1]);
//On affiche le tableau
for ($i=0; $i < count($tab)-1 ; $i++) { 
    echo $tab[$i].' | ';
}




?>