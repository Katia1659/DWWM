<?php
include_once "../modele/Client.class.php";
include_once "../modele/Compte.class.php";


    $cin = readline("Donner le CIN : ");
    $nom = readline("Donner le Nom : ");
    $prenom = readline("Donner le Prenom : ");
    $tel = readline("Donner le numero de telephone : ");

    $client1 = new Compte("$cin","$nom","$prenom","$tel");
    $somme = readline("mettez votre solde :");
    $client1 -> crediter($somme);
    $client1 -> afficherResume();
    
    $client2 = new Compte("$cin","$nom","$prenom","$tel");
    $client2 -> afficherResume();

    $client3 = new Compte("$cin","$nom","$prenom","$tel");
    $client3 -> afficherResume();

    $client4 = new Compte("$cin","$nom","$prenom","$tel");
    $client4 -> afficherResume();

  



  




    



?>
