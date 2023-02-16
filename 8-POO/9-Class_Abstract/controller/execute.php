<?php
include_once "../model/Developpeur.class.php";
include_once "../model/Personne.class.php";
include_once "../model/Manager.class.php";

//question 2 
//Après avoir créer les classes développeur et Manager, on remarque qu'elle ne peuvent pas fonctionner si on ne redéfinis pas dans ces classes la méthode "calculerSalaire()".
//De plus il faut lier la classe enfant à la classe parent avec un include (puisqu'il s'agit d'une abstract?) 


//on créer les objets de classe développeur
$developpeur1 = new Developpeur("Georges", "Abidbol", "cowboy@américain.best", "555", 10000, "cowboy");
$developpeur2 = new Developpeur("Jean", "Lachgar", "jemenficher@uzgvèu.com", "545415241", 3000, "PHP"); 

//On afficher les développeurs et on recacule leurs salaires
echo $developpeur1->afficher();
echo $developpeur1->calclulerSalaire();

echo $developpeur2->afficher();
echo $developpeur2->calclulerSalaire();

//on créer les objets de classe Manager
$manager1 = new Manager("Leo", "Tolstoï", "Anna@Karenine.com", "???", 100, "Russie");
$manager2 = new Manager("Martin", "Salim", "ezjibhneju@zjhzvb", "548484", 1000, "Informatique");

//On afficher les Managers et on recacule leurs salaires
echo $manager1->afficher();
echo $manager1->calclulerSalaire();

echo $manager2->afficher();
echo $manager2->calclulerSalaire();


// Question 6 
// On ne peut pas créer d'objet de classe Personne, car c'est une classe abstraite.
// $testPersonne = new Personne(); 
// print_r($testPersonne);
?>