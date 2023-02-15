<?php
include_once('../model/Personne.class.php');
include_once('../model/Profil.class.php');
include_once('../model/Utilisateur.class.php');

//on crée les profils en dur
$profil1 = new Profil('CP','Chef de projet');
$profil2 = new Profil('MN','Manager');
$profil3 = new Profil('DP','Directeur de projet');
$profil4 = new Profil('DRH','Directeur des ressources humaines');
$profil5 = new Profil('DG','Directeur général');

// on crée 5 utilisateurs en dur
$utilisateur1 = new Utilisateur('greg', 'azerty', $profil5->getLibelle(), 'fontaine', 'gregory', 'gre.fontaine@gmail.com','0783846405',30000,$profil5);
$utilisateur2 = new Utilisateur('michel', '12345', $profil4->getLibelle(), 'polnareff', 'michel', 'michmich@gmail.com','020154215',12000,$profil4);
$utilisateur3 = new Utilisateur('louis', 'password', $profil3->getLibelle(), 'dreyfus', 'louis', 'louis59@gmail.com','0512654255',22000,$profil3);
$utilisateur4 = new Utilisateur('scoubidoo', 'devines', $profil2->getLibelle(), 'dooo', 'scoubi', 'scoubi.doo@gmail.com','0320485255',26512,$profil2);
$utilisateur5 = new Utilisateur('Jm57', 'motdepasse!', $profil1->getLibelle(), 'michel', 'jean', 'michouu@gmail.com','0955664422',18546,$profil1);

//on procede a l'affichage
echo "***************************************".PHP_EOL;
echo "Liste des Utilisateurs".PHP_EOL."***************************************".PHP_EOL;

//creation d'une boucle pour afficher les utilisateurs
for ($i=1; $i < 6; $i++) { 
    $temp = "utilisateur$i";
    $$temp->calculerSalaire();
    $affiche = $$temp->afficher();
    // on appelle la methode augmenter salaire
    echo $affiche;
}

echo "***************************************".PHP_EOL;
echo "Liste des Managers".PHP_EOL."***************************************".PHP_EOL;

// on procede a l'affichage des managers
for ($i=1; $i < 6; $i++) { 
    $temp = "utilisateur$i";
    if ($$temp->getService() == 'Manager') {
        $affiche = $$temp->afficher();
    echo $affiche;
    }
}
?>