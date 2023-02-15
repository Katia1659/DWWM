<?php
include "../modele/Personne.class.php";
include "../modele/Profil.class.php";
include "../modele/Utilisateur.class.php";

$cp = new Profil(1,"Chef de projet");
$mn = new Profil(2,"Manager");
$dp = new Profil(3,"Directeur de projet");
$drh = new Profil(4,"Directeur des ressources humaines");
$dg = new Profil (5,"Directeur général");

$utilisateur1 = new Utilisateur("Maadour","Mounir","mounirmaadour@msn.com","06 36 70 66 61",11600, "login1","password","Direction",$dg);
$utilisateur2 = new Utilisateur("Lemarchand","René","lemarchand@hotmail.com","06 11 70 50 14",2000, "login2","password","RH",$drh);
$utilisateur3 = new Utilisateur("Pouli","Estelle","pouli@outlook.com","06 10 77 66 14",5000, "login3","password","Projet",$dp);
$utilisateur4 = new Utilisateur("Armand","Claude","armand@live.fr","06 02 70 44 63",3000, "login4","password","Management",$mn);
$utilisateur5 = new Utilisateur("Achair","Mouloud","achair@hotmail.com","07 12 70 55 61",1600, "login5","password","Projet",$cp);

$utilisateurs = array($utilisateur1,$utilisateur2,$utilisateur3,$utilisateur4,$utilisateur5);

foreach ($utilisateurs as $key => $utilObjet) {
    $utilObjet->calculerSalaire();
    $utilObjet->affiche();
}

foreach ($utilisateurs as $key => $value) {
     if ($value->getProfil()->getLibelle() == $mn->getLibelle())
      { echo PHP_EOL;
        echo "La liste des managers:\n";
        $value->affiche();
      }
 }

?>