<?php
include_once "../modele/Personne.class.php";
include_once "../modele/Developpeur.class.php";
include_once "../modele/Manager.class.php";

$dev=array();
$managers=array();

for ($i=1; $i < 3; $i++) { 

    echo "  Création du développeur n° : ".$i."\n";
    $dev[$i]= new Developpeur
    (
        $nom=readline("Nom : "),
        $prenom=readline("Prénom : "),
        $mail=readline("Mail : "),
        $tel=readline("Téléphone : "),
        $salaire=readline("Salaire : "),
        $specialite=readline("Spécialité : ")
    );

}


    echo PHP_EOL; 
for ($i=1; $i < 3; $i++) { 
    echo "  Création du manageur n° : ".$i."\n";
    $managers[$i]= new Manager
    (
        $nom=readline("Nom : "),
        $prenom=readline("Prénom : "),
        $mail=readline("Mail : "),
        $tel=readline("Téléphone : "),
        $salaire=readline("Salaire : "),
        $specialite=readline("Spécialité : ")
    
    );

    }
    echo PHP_EOL;

    echo "DEVELOPPEURS :\n";

foreach ($dev as $key => $value) 
{
    $value->calculerSalaire(); 
    $value->affiche();
}
echo PHP_EOL; 
echo "MANAGEURS :\n";

foreach ($managers as $key => $value)
 {
    $value->calculerSalaire(); 
    $value->affiche();
}