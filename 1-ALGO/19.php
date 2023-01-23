<?php 
// Ecrire un algo qui demande un nb de départ et qui ensuite affiche les 10 nb suivants

$nb = readline ('Entrez un nombre');

for ($i=0; $i <= 10; $i++) { 
    echo $nb++."\n";
}

?>