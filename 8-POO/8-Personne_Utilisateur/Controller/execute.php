
<?php
include_once "../Modele/Personne.class.php";
include_once "../Modele/Utilisateur.class.php";
include_once "../Modele/Profil.class.php";


// Instaciation des objets de classe Profil
$mn= new Profil ("MANAGER", 1 );
$cp = new Profil ("CHEF DE PROJET", 2);
$dp = new Profil ("DIRECTEUR DE PROJET", 3);
$drh = new Profil ("DIRECTEUR DE RESSOURCES HUMAINES", 4);
$dg = new Profil ("DIRECTEUR GENERAL", 5);



// Instaciation des objets de classe Utilisateur
$utilisateur1 = new Utilisateur ($mn,"lan", "Jak", "jakub1859@gmail.com","0606060606", 10000,"login","mdp", "gestion");

$utilisateur2 = new Utilisateur ($cp, "fffdfff", "Jazeab", "azeaza@gmail.com","0606060606",10000,"login","mdp","direction" );

$utilisateur3 = new Utilisateur ($dp, "bar", "zoo", "jqsdqd@gmail.com","0606060606", 17000,"login","mdp", "direction");

$utilisateur4 = new Utilisateur ($drh, "Landowski", "Jakub", "jhk@gmail.com","0606060606", 12000,"login","mdp", "ressources humaines");

$utilisateur5 = new Utilisateur ($dg, "lorem", "ipsum", "jmio9@gmail.com","0606060606", 15000 ,"login","mdp", "direction");



// Utilisation des méthodes et affichage
echo "\n";
$utilisateur1 -> affiche();
echo "\n";
$utilisateur1 -> calculerSalaire();

echo "\n";
$utilisateur2 -> affiche();
echo "\n";
$utilisateur2 -> calculerSalaire();

echo "\n";
$utilisateur3 -> affiche();
echo "\n";
$utilisateur3 -> calculerSalaire();

echo "\n";
$utilisateur4 -> affiche();
echo "\n";
$utilisateur4 -> calculerSalaire();

echo "\n";
$utilisateur5 -> affiche();
echo "\n";
$utilisateur5 -> calculerSalaire();

?>