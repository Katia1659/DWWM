<?php
require_once '../modele/Cercle.class.php';
// Demande a l'utilisateur le nommbre de point
echo 'Combien de cercle ? : ';
$nbrCercle = readline();

// Boucle pour rentrer l'abscisse et l'ordonné et le rayon du cercle
for ($i = 1; $i <= $nbrCercle; $i++)
{
    $cercle = "cercle$i";
    $abscisse = readline("Donner l' abscisse du centre : ");
    $ordonne = readline("Donner l' ordonne du centre: ");
    $r = readline("Donner le rayon : ");

    $$cercle = new Cercle($abscisse, $ordonne, $r);
    $$cercle->afficher();
    echo "Donner un point : ";
    echo "\n";
    $x = readline("X: ");
    $y = readline("Y: ");
    $$cercle->appartient($x, $y);
    echo "\n";
    echo "\n";
}


