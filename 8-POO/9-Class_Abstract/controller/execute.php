<?php 


$nbr = readline("combien voulez vous d'utilisateurs ? ");

//boucle permettant de créer les utilisateurs et de choisir leurs services / profiles
for ($i=1; $i <= $nbr ; $i++) { 
    $prenom = readline("entrer le prenom : ");
    $nom = readline("entrer le nom : ");
    $mail = readline("entrer le mail : ");
    $tel = readline("entrer le numero de telephone : ");
    $salaire = readline("entrer salaire : ");
    $service = readline("entrer votre service : ");
    $j = readline("Quel profil ? 1 pour Manager, 2 pour Developper : ");
    if ($j == 1) {
        $utilisateur[$i] = new Manager($prenom, $nom, $mail, $tel, $salaire,$service, $chefProjet); 
    }elseif ($j == 2) {
        $utilisateur[$i] = new Developpeur($prenom, $nom, $mail, $tel, $salaire,$service, $manager); 
    }
}



