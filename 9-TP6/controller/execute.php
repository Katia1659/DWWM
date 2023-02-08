<?php

include "../modele/Compte.class.php";

$comptes = array();
$i = 1;

$compte1 = new Compte('EZ014525', 'LAMRI', 'KAOU', '0789656');
$compte2 = new Compte('EZ0142300', 'DLAM', 'MAOU', '078960012');

echo "

1- Ajouter un nouveaux compte\t
2- Afficher un compte\t
3- Crideter un compte\t
4- Debiter un compte\t
5- Credeter depuis un compte\t
6- Debiter depuis un compte\t

";

$choix = readline("--Entrer Votre Réponse: ");

switch ($choix) {
    case 1:
        $rep = readline("vous allez ajouter un nouveaux compte continuer ? (o/n)");

        do {
            $cin = readline("Donner le CIN: ");
            $nom = readline("Donner le nom: ");
            $prenom = readline("Donner le prénom: ");
            $tel = readline("Donner Le numéro de téléphone:  ");

            $comptes['compte' . $i] = new Compte($cin, $nom, $prenom, $tel);
            $i++;
            $rep = readline("vous allez ajouter un nouveaux compte continuer ? (o/n)");
        } while ($rep != 'n');
    case 2:
        $quest= readline("Entrer le numéro de compte a afficher /si non ecris tout");
        if (is_int($quest))
        {
         $comptes['compte'.$quest]->afficher();   
        }
        else
        {
            foreach ($comptes as $key => $value )
            {
                echo $key;
                echo PHP_EOL;
                $value->afficher();
            }
        }
        
    case 3:
    
}
