<?php

include '../modele/Personne.class.php';
include '../modele/Developpeur.class.php';
include '../modele/Manager.class.php';


echo "****************************************************"."\n";


//Creation de developpeurs
for ($i=1; $i <= 2; $i++) {

    echo "Developpeur ".Developpeur::$compteur."\n";

echo "-----------------------"."\n";

echo "Vos infos : "."\n";

$nom = readline("Votre nom : ");
$prenom = readline("Votre prenom : ");
$mail = readline("Votre mail : ");
$telephone = readline("Votre telephone : ");
$salaire = readline("Salaire : ");
echo PHP_EOL;

$_specialite = readline("Votre spécialité : ");
echo PHP_EOL;


$dev[$i] = new Developpeur($_specialite,$nom,$prenom,$mail,$telephone,$salaire);

}


//Creation de managers
for ($i=1; $i <= 2; $i++) {

    echo "Manager ".Manager::$compteur."\n";

echo "-----------------------"."\n";

echo "Vos infos : "."\n";

$nom = readline("Votre nom : ");
$prenom = readline("Votre prenom : ");
$mail = readline("Votre mail : ");
$telephone = readline("Votre telephone : ");
$salaire = readline("Salaire : ");
echo PHP_EOL;

$_service = readline("Votre service : ");
echo PHP_EOL;


$manager[$i] = new Manager($_service,$nom,$prenom,$mail,$telephone,$salaire);

}
echo "****************************************************"."\n";

foreach ($dev as $value) {

    //Calcul du salaire
    $value->calculerSalaire();

    //Affichage dev
    $value->afficher();
    
}

foreach ($manager as $value) {

    //Calcul du salaire
    $value->calculerSalaire();

    //Affichage manager
    $value->afficher();
}

//6. Les class Manager et Developpeur on besoin de la classe Personne pour s'instancier