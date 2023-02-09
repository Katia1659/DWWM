<?php
include_once "../modele/Client.class.php";
include_once "../modele/Compte.class.php";

//creation des readline pour donner les info du client
    echo "Compte 1:\n";
    $cin = readline("Donner le CIN : ");
    $nom = readline("Donner le Nom : ");
    $prenom = readline("Donner le Prenom : ");
    $tel = readline("Donner le numero de telephone : ");
    echo "Détails du compte : \n****************************\n";

    //creation de l'objet compte
    $client1 = new Compte("$cin","$nom","$prenom","$tel");
    $somme = readline("Donner le montant a déposer : ");

    echo "Opération bien effectuée\n****************************\n";

    //utilisation des methods
    $client1 -> crediter($somme);
    $client1 -> afficherResume();
    $somme = readline("Donner le montant a retirer : ");
    echo "Opération bien effectuée\n****************************\n";
    $client1 -> debiter($somme);
    $client1 -> afficherResume();

    //creation d'un nouveau compte avec l'objet compte
    $client2 = new Compte("$cin","$nom","$prenom","$tel");
    $client2 -> afficherResume();
    $somme = readline("Crediter le compte 2 a partir du compte 1 \n Donner le montant a deposer : ");

    //utilisation des methods
    $client2 -> crediterCpt($somme, $client1);
    echo "Opération bien effectuée\n****************************";
    $somme = readline("Debiter le compte 1 et crediter le compte 2 : \n Donner me montant a retirer : ");
    $client1 -> debiterCpt($somme, $client2);
    echo "Opération bien effectuée\n****************************";
    $client1 -> afficherResume();
    $client2 -> afficherResume();
    


    
    




    /*
    $client2 = new Compte("$cin","$nom","$prenom","$tel");
    $client2 -> afficherResume();


    $client3 = new Compte("$cin","$nom","$prenom","$tel");
    $client3 -> afficherResume();
*/
  



  




    



?>
