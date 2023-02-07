<?php
require_once '../modele/Point.class.php';
// Demande a l'utilisateur le nommbre de point
echo 'Combien de point ? : ';
$nbrPoint = readline();

// Boucle pour rentrer l'abscisse et l'ordonné du point.
for ($i = 1; $i <= $nbrPoint; $i++){
    $point = "point$i";
    echo "Mettez l\' abscisse du $point : ";
    $abscisse = readline();
    echo "Mettez l\' ordonne du $point: ";
    $ordonne = readline();
    $$point = new Point($abscisse, $ordonne);
    $norme = $$point->Norme();
    $abscisse = $$point->getAbscisse();
    $ordonne = $$point->getOrdonne();
    echo "La norme du point ($abscisse,$ordonne) est : $norme \n \n";
}





