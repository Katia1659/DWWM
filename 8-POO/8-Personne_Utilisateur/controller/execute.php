<?php

include_once "../modele/Personne.class.php";
include_once "../modele/Profil.class.php";
include_once "../modele/Utilisateur.class.php";



$profils = array(
    $cp = new Profil(6514654, "Chef de projet"),
    $mn = new Profil(6148546, "Manager"),
    $dp = new Profil(6168432, "Directeur de projet"),
    $drh = new Profil(6186734, "Directeur des ressources humaines"),
    $dg = new Profil(6186734, "Directeur général")
);

$utilisateurs = array(
    new Utilisateur("Maadour","Mounir","mounirmaadour@msn.com","06 36 70 66 61",10000, "login1","password","Direction",$dg),
    new Utilisateur("Lemarchand","René","lemarchand@hotmail.com","06 11 70 50 14",10000, "login2","password","RH",$drh),
    new Utilisateur("Pouli","Estelle","pouli@outlook.com","06 10 77 66 14",10000, "login3","password","Projet",$dp),
    new Utilisateur("Armand","Claude","armand@live.fr","06 02 70 44 63",10000, "login4","password","Management",$mn),
    new Utilisateur("Achair","Mouloud","achair@hotmail.com","07 12 70 55 61",10000, "login5","password","Projet",$cp)
);

for ($i = 0; $i <count($profils); $i++) {
    $utilisateurs[$i]->calculerSalaire();
    echo PHP_EOL;
}


for ($i = 0; $i < count($utilisateurs); $i++) {
    $utilisateurs[$i]->affiche();
    echo PHP_EOL;
}

foreach ($utilisateurs as $key => $value) {
    echo PHP_EOL;
    $value -> afficheManager();
    
}

