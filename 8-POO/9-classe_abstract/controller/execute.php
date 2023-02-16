<?php
include_once "../Modele/Personne.class.php";
include_once "../Modele/Manager.class.php";
include_once "../Modele/Developpeur.class.php";



$manager[1] = new Manager('anthony','canipel', "canipelanthony@hotmail.com", '06098076054 ', 1245, "Management");

$manager[2] = new Manager('VAUSKI','Jakub', "Leyac@gmail.fr", '06234532212 ', 1245, "Management");

$developpeur[1] = new Developpeur('seb', 'Legrand', 'seblegabrnf@hotmail.fr', "0609584838",1300, 'PHP');

$developpeur[2] = new Developpeur('Messuve', 'volcan', 'lesvoclan@hotmail.com', "063453459934",1450, 'Full stack');

echo "Les managers : \n";
for($i = 1; $i <= count($manager); $i++) {

$manager[$i]->affiche();

$manager[$i]->calculerSalaire();
echo "\n";
}

?>