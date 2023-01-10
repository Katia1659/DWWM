<?php
/*
• Réécrire l'algorithme précédent, mais cette fois-ci on ne connaît
pas d'avance combien l'utilisateur souhaite saisir de nombres. La
saisie des nombres s'arrête lorsque l'utilisateur entre un zéro.
*/

//inisilisation des var
$nbGrand ='';
$nb = '';
$i = '';
$position = '';
$nbUtilisateur = 0 ;
echo 'debut';

//creation de la boucle for
for ($i=0; $i <= $nbUtilisateur ; $i++) {
    $nbUtilisateur = $nbUtilisateur+1;
    $nb = readline('entrez un chiffre');

        if ($nb > $nbGrand) {
            $nbGrand = $nb;
            $position = $i+1 ;
        } 
        if ($nb == 0){
            break;
        }
};
echo "\n";
echo $nbGrand;
echo "\n";
echo $position;
?>