<?php
include_once('../model/Personne.class.php');
include_once('../model/Manager.class.php');
include_once('../model/Developpeur.class.php');


$personne1 = new Manager('LACHGAR','Jean', 'j.lachgar@gmail.com', '0785214563', 20000, 'Informatique');
$personne2 = new Manager('FONTAINE','Gregory', 'gre.fontaine@gmail.com', '0123456789', 25000, 'Depannage');
$personne3 = new Manager('SALIM','Martin', 's.martin@gmail.com', '0147852369', 22000, 'PHP');
$personne4 = new Manager('PALAREF','Michel', 'm.palaref@gmail.com', '9876543210', 12000, 'JAVA/JEE');

for ($i=0; $i < 5; $i++) { 
    $temp = "personne$i";
    $$temp->calculerSalaire();
    $$temp->afficher();
}

?>