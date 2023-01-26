<?php
/* R éécrire l'algorithme précédent, mais cette fois-ci on ne connaît
pas d'avance combien l'utilisateur souhaite saisir de nombres. La
saisie des nombres s'arrête lorsque l'utilisateur entre un zéro.
Debut
nbmax=0
i=0
tant que nb != 0
lire nb
i++
si nb > nbmax => nbmax = nb
*/
$posimax = 1;
$nbmax = 0;
$i=1;
$nb = readline("entrez nombre : ");
$nbmax = $nb;
while ($nb != 0) {
    $nb = readline("entrez nombre : ");
    $i++;
    if ($nb > $nbmax) {
        $nbmax = $nb;
        $posimax = $i;
    }
}
echo "le plus gros nombre est : ";
echo $nbmax;
echo PHP_EOL;
echo "la position du plus grand nombre est : ";
echo $posimax;
?>
