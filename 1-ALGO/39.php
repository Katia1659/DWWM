<?php 
/*Toujours et encore sur le même principe, écrivez un algorithme permettant, à l'utilisateur de saisir les notes d'une classe. Le programme, une fois la saisie terminée, renvoie le nombre de ces notes supérieures à la moyenne de la classe.
*/
$tabNote=array();
$tabNoteSup=array();
$nb=readline('Combien voulez-vous de valeurs dans votre tableau? : '); 
$pg=0;
$somme=0;
$noteSup=0;
for ($i=0; $i < $nb ; $i++) { 
    $tabNote[$i]=readline('la note ? : ');
    $somme= $somme + $tabNote[$i];
    $moyenne= $somme/$nb;
    
}
for ($j=0; $j < $tabNoteSup ; $j++) { 
    if ($tabNote[$i]>$moyenne) {
        $noteSup=$tabNote[$i];
        echo $noteSup;
    }
}


echo 'la moyenne est : '.$moyenne;


// for ($i=0; $i < $nb ; $i++) { 
//     echo ($tab[$i]).'|' ;
// }


?>