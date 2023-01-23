<?php 
// Ecrire un algo qui demande un nb calcule puis affiche somme sigma

$nb = readline ('Un nombre ?');
$∑ = 0;


 

for ($i=1; $i <=$nb; $i++) { 
    $∑= $∑+$i*$i*$i;
    echo $∑;
   
}

?>