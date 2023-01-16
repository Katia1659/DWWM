<?php
/* ecrire "entrez un algorithme qui demande deux nombres à l'utilisateur et l'informe ensuite si leur produit est n"gatif ou positif (on laisse de coté le cas ou le produit est nul). Attention toutefois : on ne doit pas calculer le produit "
lire nombre1
ecrire " entrez un second nombre"
lire nombre2
si nombre1 et nombre2>0 alors
ecrire "les nombre sont positifs
sinon si nombre1 > 0 ou nombre2<0 
ecirire "un des deux nombre est negatif"
sinon si nombre1 et nombre2 <0
ecrire "les nombres sont negatif
*/
$nombre1 = readline ('Entrez un nombre :');
$nombre2 = readline ('Entrez un second nombre :'); 

if ($nombre1 > 0 && $nombre2 > 0) {
    echo 'les nombres sont positif';
}elseif ($nombre1 < 0 && $nombre2<0) {
    echo 'les nombres sont negatifs';
}
elseif ($nombre1 < 0 || $nombre2 > 0) {
    echo 'le premier nombre est negatif';
}
elseif ($nombre1 > 0 || $nombre2 < 0) {
    echo 'le second nombre est negatif';
}
?>

