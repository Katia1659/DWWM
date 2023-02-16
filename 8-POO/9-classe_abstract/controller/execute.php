<?php
include_once('../model/Personne.class.php');
include_once('../model/Manager.class.php');
include_once('../model/Developpeur.class.php');

// on crée 2 managers et 2 developpeur
$personne1 = new Manager('LACHGAR','Jean', 'j.lachgar@gmail.com', '0785214563', 20000, 'Informatique');
$personne2 = new Manager('FONTAINE','Gregory', 'gre.fontaine@gmail.com', '0123456789', 25000, 'Depannage');
$personne3 = new Developpeur('SALIM','Martin', 's.martin@gmail.com', '0147852369', 22000, 'PHP');
$personne4 = new Developpeur('PALAREF','Michel', 'm.palaref@gmail.com', '9876543210', 12000, 'JAVA/JEE');

//boucle pour l'augmentation su salaire et l'affichage
for ($i=1; $i < 5; $i++) { 
    $temp = "personne$i";
    $$temp->calculerSalaire();
    $text = $$temp->afficher();
    echo $text;
}

// 2. on ne peut pas mettre parent::__construct dans la classe manager ou developpeur
// 6. il est impossible de creer une classe Personne 

?>