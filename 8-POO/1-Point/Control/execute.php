<?php
include_once "../Model/Point.class.php";

//On demande les valeurs des différents paramètres liée à la class article, la boucle for permet de répéter l'action autant de fois que l'utilisateur veut avec nbr définie avant la boucle

$nbr = readline("Donnez le nombre de points : ");

for ($i=1; $i <= $nbr; $i++) { 
    $point = "point_$i";
    $x = readline("Donnez l'abscisse du $point : ");
    $y = readline("Donnez l'ordonnée du $point : ");
    $$point = new Point($x,$y); 
    $norme = $$point->norme();
    echo "La norme du $point ($x,$y) est : $norme \n \n";
}

?>