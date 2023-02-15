<?php

include '../modele/Personne.class.php';
include '../modele/Developpeur.class.php';
include '../modele/Manager.class.php';


echo "****************************************************"."\n";

for ($i=1; $i <= 2; $i++) {

    echo "Utilisateur ".Developpeur::$compteur."\n";

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


$dev[$i]=new Developpeur($_specialite,$nom,$prenom,$mail,$telephone,$salaire);

}

for ($i=1; $i <= 2; $i++) {

    echo "Utilisateur ".Manager::$compteur."\n";

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


$manager[$i]=new Manager($_service,$nom,$prenom,$mail,$telephone,$salaire);

}
echo "****************************************************"."\n";

foreach ($dev as $key => $value) {

    //Calcul du salaire
    $dev->calculerSalaire();

    //Affichage dev/utilisateur
    $dev->afficher();
}

foreach ($manager as $key => $value) {

    //Calcul du salaire
    $manager->calculerSalaire();

    //Affichage dev/utilisateur
    $manager->afficher();
}