<?php

include_once "../Modele/Etudiant.class.php";
include_once "../Modele/Filiere.class.php";

// On instancie trois filières et on les affiche grâce à la méthode toString

echo "La liste des filières de notre école : \n";

$filiere[1] = new Filiere(00, 'Informatique');
$filiere[2] = new Filiere(01, "Techno de l'info et de la communication");
$filiere[3] = new Filiere(02, 'Génie civil');

echo  $filiere[1];
echo  $filiere[2];
echo  $filiere[3];

// On instancie cinq étudiants et on affiche les différents étudiants répartis par filière


$etudiant[1] = new Etudiants('Mohamed', 'Rashid', '1992/01/02', $filiere[1]);

$etudiant[2] = new Etudiants('Yves','Chakib', '1992/04/02', $filiere[1]);

$etudiant[3] = new Etudiants('Martin', 'Manal', '2011/03/02', $filiere[2]);

$etudiant[4] = new Etudiants('Jacques', 'Meriem', '2000/11/02', $filiere[3]);

$etudiant[5] = new Etudiants('Remi', 'Mouad', '2011/03/02', $filiere[3]);


echo "Liste des filieres de notre école\n";
for ($i=1; $i <= sizeof($filiere) ; $i++) { 
    echo "$filiere[$i]" ;
    for ($j=1; $j <= sizeof($etudiant) ; $j++) { 
       if ($etudiant[$j]->getFiliere()==$filiere[$i]) {
        echo $etudiant[$j]."\n";
       }
    }
}

// echo $filiere[1];

// echo $etudiant[1]."\n";

// echo $etudiant[2]."\n";

// echo $filiere[2];

// echo $etudiant[3]."\n";

// echo $filiere[3];

// echo $etudiant[4]."\n";

// echo $etudiant[5]."\n";

