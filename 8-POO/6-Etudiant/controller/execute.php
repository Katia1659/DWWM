<?php
include_once ("../modele/etudiant.Class.php");
include_once ("../modele/Filliere.php");

$count1=0;
$count2=0;
$count3=0;
$code = "INF";
$libelle = "Informatique";
$id = 1;
$filiaire = new Filière( $id,$code,$libelle,);

$code = "THIC";
$libelle = "Techno de l'info et de communication";
$id = 2;
$filiaire2 = new Filière( $id,$code,$libelle);

$code = "CIVGENIUS";
$libelle = "Génie Civil";
$id = 3;
$filiaire3 = new Filière( $id,$code,$libelle);
for ($i=0; $i <3 ; $i++) { 
    # code...
    $code = readline("Entrez la filière de votre choix :\n
    Informatique (Tapez INF) \n
    Techno de l'info et de communication (Tapez THIC) \n
    Génie Civil (CIVGENIUS)\n");
    if ($code == "INF") {
        echo $filiaire;
        for ($j=1; $j >0 ; $j++) { 
            $nom = readline("Entrez le Nom : \n");
            $prenom = readline ("Entrez le Prenom : \n");
            $dateNaissance = readline ("Entrez la date de naissance (DD/MM/YYYY): ");
            $studINF[$j] = new Etudiant($id,$nom,$prenom,$dateNaissance);
            $count1 += 1;
            echo $studINF[$j];
            $rep = readline ("Quitter ? tapez O ou N");
            if ($rep == "O") {
                $j=-1;
            }
        }
    }
    elseif ($code == "THIC"){
        echo $filiaire2;
        for ($j=1; $j >0 ; $j++) { 
            $nom = readline("Entrez le Nom : \n");
            $prenom = readline ("Entrez le Prenom : \n");
            $dateNaissance = readline ("Entrez la date de naissance (DD/MM/YYYY): ");
            $studTHIC[$j] = new Etudiant($id,$nom,$prenom,$dateNaissance);
            $count2 += 1;
            echo $studTHIC[$j];
            $rep = readline ("Quitter ? tapez O ou N");
            if ($rep == "O") {
                $j=-1;
            }
        }
    }
    elseif ($code == "CIVGENIUS"){
        echo $filiaire3;
        for ($j=1; $j >0 ; $j++) { 
            $nom = readline("Entrez le Nom : \n");
            $prenom = readline ("Entrez le Prenom : \n");
            $dateNaissance = readline ("Entrez la date de naissance (DD/MM/YYYY): ");
            $studCIVGENIUS[$j] = new Etudiant($id,$nom,$prenom,$dateNaissance);
            $count3 += 1;
            echo $studCIVGENIUS[$j];
            $rep = readline ("Quitter ? tapez O ou N");
            if ($rep == "O") {
                $j=-1;
            }
        }
    }
}
    

echo $filiaire;
for ($i=1; $i <= $count1; $i++) { 
    echo $studINF[$i];
}
echo $filiaire2;
for ($i=1; $i <= $count2; $i++) { 
    echo $studTHIC[$i];
}
echo $filiaire3;
for ($i=1; $i <= $count3; $i++) { 
    echo $studCIVGENIUS[$i];
}
