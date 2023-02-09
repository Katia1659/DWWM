<?php

include "../modele/Compte.class.php";

$comptes = array();
$i = 1;

do {
    echo "

1- Ajouter un nouveaux compte\t
2- Afficher un compte\t
3- Afficher touts les comptes\t
4- Crideter un compte\t
5- Debiter un compte\t
6- Credeter depuis un compte\t
7- Debiter depuis un compte\t
8- Quitter le Programme\t

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

                $comptes['compte' . $i] = new Compte($cin, $nom, $prenom, $tel);
                $i++;
                $rep = readline("vous allez ajouter un nouveaux compte continuer ? (o/n)");
            } while ($rep != 'n');
            break;
        case 2:
            print " Choisir un Compte ---------------\n";
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

            $comptes['compte' . $i]->crediter($somme);
            $soldeCompte = $comptes['compte' . $i]->getSolde();

            print "Solde Ajouter avec succées nouveaux solde : $soldeCompte  ;)";

            break;

        case 5:
            print " Debiter un compte -------------\n";

            $i = readline("Entrer le numéro de compte à debiter : ");
            $somme = readline(" Entrer la somme :");

            if ($soldeCompte >= $somme) {
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

            if ($soldeCompte >= $somme) {
                $comptes['compte' . $i]->crediterCpt($comptes['compte' . $j], $somme);
                $soldeCompte = $comptes['compte' . $i]->getSolde();

                print "compte n°" . $i . "Solde debiter avec succées :)  nouveau solde : $soldeCompte";
            } else {
                print "Echec Solde insufisant ! :(";
            }
            break;
        case 7:
            print "Debiter depuis un compte-----------\n";
            $i = readline("Entrer le numéro de compte à crediter : ");
            $j = readline("Entrer le numéro de compte à debiter : ");
            $somme = readline(" Entrer la somme :");
            $soldeCompte = $comptes['compte' . $j]->getSolde();
            if ($soldeCompte >= $somme) {
                $comptes['compte' . $i]->debiterCpt($comptes['compte' . $j], $somme);
                print "compte n°" . $j . " Solde debiter avec succées :)  nouveau solde : $soldeCompte";
            } else {
                print "Echec Solde insufisant ! :(";
            }
            break;
    }
} while ($choix != 8);
