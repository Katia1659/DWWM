<?php

include_once "../modele/Personne.class.php";
include_once "../modele/Manager.class.php";
include_once "../modele/Developpeur.class.php";

//creation d'instance de la classe developpeur
$developpeur = array(
$dev1 = new Developpeur("SALIM", "Martin", "martin.salim@gmail.com", "06 01 02 03 04", 1000, "PHP"),
$dev2 = new Developpeur("TOTO", "Tata", "tata.toto@gmail.com", "06 05 06 07 08", 1000, "Java")
);

//creation d'instance de la classe manageur
$manageur = array(
$man1 = new Manager("LACHGAR", "Jean", "jean.lachgar@gmail.com", "06 01 02 03 04", 1000, "Informatique"),
$man2 = new Manager("LELE", "Tete", "tata.lele@gmail.com", "06 05 06 07 08", 1000, "Anglais")
);


// foreach ($developpeur as $developpeurs) {
//     echo $developpeurs;
//     echo PHP_EOL;
// }

// foreach ($manageur as $manageurs) {
//     echo $manageurs;
//     echo PHP_EOL;
// }

// parcours chaque element du tableau developpeur
for ($i=0; $i <count($developpeur) ; $i++) { 
    echo $developpeur[$i];
    echo PHP_EOL;
}

echo PHP_EOL;

for ($i=0; $i <count($manageur) ; $i++) { 
    echo $manageur[$i];
    echo PHP_EOL;
}