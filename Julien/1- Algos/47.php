<?php
/*Donner un algorithme pour supprimer un élément donné d'un tableau d'entiers.*/
$tab = array (1, 5, 7);
$position = readline ("Entrez le n°de case à supprimer");
for ($i= 0; $i < count ($tab); $i++) {
    if ($i == $position) {
        $tab[$i-1] = null;
    }

}
for ($i=0; $i < count ($tab); $i++) {
    echo $tab [$i];
}
?>