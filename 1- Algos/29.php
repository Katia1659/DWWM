<?php
/*
• Ecrire un algorithme qui demande un nombre , calcule et affiche la
somme
*/

//inisilisation de la var nb 
$nb = readline('donnez un nb');

for ($i=0; $i <= $nb ; $i++) { 
    $somme = $somme+$i**3;
}
echo $somme;
?>
