<?php
/* 
Les habitants de Paris paient l'impôt selon les règles suivantes : 
 - Les hommes de plus de 20 ans paient l'impôt
 - Les femmes paient l'impôt si elles ont entre 18 et 35 ans
 - Les autres ne paient pas d'impôt 
Le programme demandera donc l'âge et le sexe du Parisien et se prononcera donc ensuite sur le fait que l'habitant est imposable.
*/

echo 'Début';
echo PHP_EOL;
// initialisation des variables  

$age = readline("Quel age ? ");
echo PHP_EOL;
$sexe = readline("Homme ou Femme ? f/h ");
echo PHP_EOL;

//conditionnement par rapport a l'age et au sexe + affichage 
if (($sexe == "h") and ($age > 20)) {
    echo 'Il va payer des impot';
    echo PHP_EOL;
} elseif (($sexe == "f") and ($age > 17 and $age < 36)) {
    echo 'Elle va payer des impot';
    echo PHP_EOL;
} else {
    echo 'Cette personne ne paye pas d"impot';
    echo PHP_EOL;
}
echo 'Fin';
