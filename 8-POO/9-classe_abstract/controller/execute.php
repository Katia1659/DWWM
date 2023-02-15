<?php
include "../modele/Personne.class.php";
include "../modele/Developpeur.class.php";
include "../modele/Manager.class.php";

$devop=array();
$mangers=array();


// Créer deux développeurs et deux managers.

for ($i=1; $i < 3; $i++) { 
echo "------création Developpeur n°: ".$i."\n";
    $devop[$i]= new Developpeur(
        $nom=readline("nom: "),
        $prenom=readline("prenom: "),
        $mail=readline("mail :"),
        $tel=readline("numero de telephone: "),
        $salaire=readline("salaire: "),
        $specialite=readline("specialité: ")
    );

}
echo PHP_EOL; 
for ($i=1; $i < 3; $i++) { 
    echo "------création Manageur n°: ".$i."\n";
    $mangers[$i]= new Manager(

            $nom=readline("nom: "),
            $prenom=readline("prenom: "),
            $mail=readline("mail :"),
            $tel=readline("numero de telephone: "),
            $salaire=readline("salaire: "),
            $service=readline("service: ")
        );
    
    }
// Afficher les informations des objets crées.

echo "*************--DEVELOPPEURS--************************\n";

foreach ($devop as $key => $value) 
{
    $value->calculerSalaire(); 
    $value->affiche();
    echo PHP_EOL;
}
echo PHP_EOL; 
echo "*************--MANAGEURS--***************************\n";

foreach ($mangers as $key => $value)
 {
    $value->calculerSalaire(); 
    $value->affiche();
    echo PHP_EOL;
}