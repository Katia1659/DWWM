<?php 
//Ecrire un algo qui demande un nb de départ et qui calcule sa factorielle

$nb = readline ('Entrez un nombre');
$facto=1;

for ($i=1; $i <= $nb; $i++) { 
   $facto=$facto*$i;
}

echo $facto;
?>