<?php
require_once '../Modele/Utilisateur.class.php';
require_once '../Modele/Profil.class.php';


//initialisation des profils :
/*for ($i = 1; $i <= 5; $i++)
{
    $pro = "pro$i";
    $code = $i;
    $libelle = readline("Libelle $i: ");
    $$pro = new Profil($code, $libelle);
}*/
$pro1 = new Profil('CP', 'Chef de projet');
$pro2 = new Profil('MN', 'Manager');
$pro3 = new Profil('DP', 'Directeur de projet');
$pro4 = new Profil('DRH', 'Directeur des ressouces humaines');
$pro5 = new Profil('DG', 'Directeur général');

//Demande a l'utilisateur le nombre de d'utilisateur'
$numUsers = readline("Nombre d'utilisateur : ");
//Saisie des donnees
for ($i = 1; $i <= $numUsers; $i++)
{
    $user = "user$i";
    $login = readline('Login : ');
    $password = readline('Password : ');
    $nom = readline('Votre nom : ');
    $prenom = readline('Votre prenom : ');
    $mail = readline('Votre mail : ');
    $tel = readline('Votre telephone : ');
    $salaire = readline('Votre salaire :');
    $service = readline('Votre service : ');
    $profil = readline('Avez vous un profil ? Oui/Non ou Y/N: ');
    if ($profil === 'Oui' || $profil === 'Y'){
        echo "1-Chef de projet \n 2-Manager \n 3-Directeur de projet \n"
            . " 4-Directeur ressources humaines \n 5-Directeur général \n";
        $j = readline("Numero de profil : ");
        $pro = "pro$j";
        $$user = new Utilisateur($login, $password, $service, $nom, $prenom, $mail, $tel, $salaire,$$pro);
    }else{
        $$user = new Utilisateur($login, $password, $service, $nom, $prenom, $mail, $tel, $salaire);
    }


}


echo "Liste des utilisateur : \n";
for ($i = 1; $i <= $numUsers; $i++)
{
    $user = "user$i";
    $$user->calculerSalaire();
    $$user->afficher();
}
echo "\n";
echo "\n";
echo "Liste des managers : \n";
for ($i = 1; $i <= $numUsers; $i++)
{
    $user = "user$i";
    if ($$user->_profil !== null){
        $libelle = $$user->getProfil()->getLibelle();
        if ($libelle === 'Manager'){
            $$user->afficher();
        }
    }

}
