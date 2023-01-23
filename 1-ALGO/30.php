<?php 
//Donnez le result de la multiplication de deux nb en ne faisant que des additions

$nb1 = readline ('Entrez un 1er nombre ');
$nb2 = readline ('Entrez un 2ème nombre ');

//Calcul
$result = 0;
for ($i=1; $i<=$nb2;$i++){
    $result = $result + $nb1;
}
   echo $result;
?>