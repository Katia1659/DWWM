<?php

include "../modele/Compte.class.php";

//  Array qui va etre incrémenter avec les objets Compte.
$comptes = array();
if ($k!=null)
{
    $i=$k;
}
else
{
    $i = 1;   
}


// Menue dy programme
do {
    echo "
------MENUE------------------\t
1- Ajouter un nouveaux compte\t
2- Afficher un compte\t
3- Afficher touts les comptes\t
4- Crideter un compte\t
5- Debiter un compte\t
6- Credeter depuis un compte\t
7- Debiter depuis un compte\t
8- Afficher le nombre de comptes créer\t
9-Quitter\t

";

    $choix = readline("--Entrer Votre Réponse: ");
    
    switch ($choix) {
        case 1:
            print " Ajouter un Compte ---------------\n";

            do {
                $cin = readline("Donner le CIN: ");
                $nom = readline("Donner le nom: ");
                $prenom = readline("Donner le prénom: ");
                $tel = readline("Donner Le numéro de téléphone:  ");

                // instanciation d'objet Compte dans chaque élément 'compt$i' du tableau:
                $comptes['compte' . $i] = new Compte($cin, $nom, $prenom, $tel);
                $i++;
                $rep = readline("vous allez ajouter un nouveaux compte continuer ? (o/n)");
                $k=$i;
            } while ($rep != 'n');
            break;
        case 2:
            print " Choisir un Compte ---------------\n";
            // Rappel du nombre des comptes existants 
            echo "il existe " . Compte::$my_compteur . " comptes\t";
            $quest = readline("Entrer le numéro de compte a afficher :");
            if ($quest <= sizeof($comptes)) {
                $comptes['compte' . $quest]->afficher();
            } elseif (!is_int($quest)) {
                print "Le numéro de compte est un chiffre";
            } else {
                print " Compte Inexistant !!";
            }
            break;

        case 3:
            print "COMPTES ENREGISTREE--------------\n";
            // boucle foreach pour afficher les éléments Comptes
            foreach ($comptes as $key => $value) {
                echo $key;
                echo PHP_EOL;
                $value->afficher();
            }
            break;

        case 4:
            print " Crediter un compte --------------\n";

            $i = readline("Entrer le numéro de compte à crédeter : ");
            $somme = readline(" Entrer la somme à ajouter ");
            // Activation de la méthode crediter!
            $comptes['compte' . $i]->crediter($somme);
            $soldeCompte = $comptes['compte' . $i]->getSolde();

            print "Solde Ajouter avec succées nouveaux solde : $soldeCompte  ;)";

            break;

        case 5:
            print " Debiter un compte -------------\n";

            $i = readline("Entrer le numéro de compte à debiter : ");
            $somme = readline(" Entrer la somme :");

            if ($soldeCompte >= $somme) {
                // Activation de la méthode debiter!
                $comptes['compte' . $i]->debiter($somme);
                $soldeCompte = $comptes['compte' . $i]->getSolde();
                print "Solde debiter avec succées :)  nouveau solde : $soldeCompte";
            } else {
                print "Echec Solde insufisant ! :(";
            }
            break;
        case 6:
            print "Credeter depuis un compte---------\n";
            $i = readline("Entrer le numéro de compte à debiter : ");
            $j = readline("Entrer le numéro de compte à crediter : ");
            $somme = readline(" Entrer la somme :");

            if ($comptes['compte' . $i]->getSolde() >= $somme) {
                
                // Activation de la méthode crediterCpt()!
                $comptes['compte' . $j]->crediterCpt($comptes['compte' . $i], $somme);
                print "compte n°" . $j . " Solde crediter avec succées :)  nouveau solde : " . $comptes['compte' . $j]->getSolde();
            } else {
                print "Echec Solde insufisant ! :(";
            }
            break;
        case 7:
            print "Debiter depuis un compte-----------\n";
            $j = readline("Entrer le numéro de compte à debiter : ");
            $i = readline("Entrer le numéro de compte à crediter : ");
            $somme = readline(" Entrer la somme :");

            if ($comptes['compte' . $j]->getSolde() >= $somme) {
                // Activation de la méthode debiterCpt()!
                $comptes['compte' . $j]->debiterCpt($comptes['compte' . $i], $somme);
                print "compte n°" . $j . " Solde debiter avec succées :)  nouveau solde : " . $comptes['compte' . $j]->getSolde();
            } else {
                print "Echec Solde insufisant ! :(";
            }
            break;
        case 8:
            // Affichage du nombre des comptes
            print " Nombre de Comptes Enregistrés est : " . Compte::$my_compteur . " comptes";
            break;
        case 9:
            // Quitter 
            print "A Bientôt";
    }
} while ($choix != 9);
