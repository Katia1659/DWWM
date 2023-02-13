<?php
include_once "../modele/Etudiant.class.php";


//CREATION DES TABLEAU FILIERE
$nbrFiliere = readline("Combien de filiere : ");
$i = 1;
while ($i <= $nbrFiliere) {
    $code = readline("Quel code : ");
    $libelle = readline("Quel Libelle : ");
    $filiere[$i] = new Filiere($code, $libelle);
    // echo $filiere[$i];
    $i++;
}

//CREATION DES TABLEAU ETUDIANT
$nbrEtudiant = readline("Combien d'étudiant : ");
for ($j = 1; $j <= $nbrEtudiant; $j++) {
    $nom = readline("Quel nom : ");
    $prenom = readline("Quel prenom : ");
    $dateNaissance = readline("Quel dateNaissance : ");
    $i = readline("Quelle filiere ? de 1 à ". sizeof($filiere) ." : ");
    $etudiant[$j] = new Etudiant($nom, $prenom, $dateNaissance, $filiere[$i]);
    // echo $etudiant[$j];
}


//AFFICHAGE DES ETUDIANTS PAR FILIERE
echo "Liste des filieres de notre école\n";
for ($i=1; $i <= sizeof($filiere) ; $i++) { 
    echo "$filiere[$i]" ;
    for ($j=1; $j <= sizeof($etudiant) ; $j++) { 
       if ($etudiant[$j]->getFiliere()==$filiere[$i]) {
        echo $etudiant[$j];
       }
    }
}
