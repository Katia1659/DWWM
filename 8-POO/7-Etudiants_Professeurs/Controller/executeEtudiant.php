<?php
include_once "../modele/Personne.class.php";
include_once "../modele/Etudiant.class.php";
include_once "../modele/Employe.class.php";
include_once "../modele/Professeur.class.php";

//CREATION DES TABLEAU ETUDIANT
$nbretudiant = readline("Combien de étudiant : ");
$i = 1;
while ($i <= $nbretudiant) {
    $id = readline("ETUDIANT :\n".  "Quel id : ");
    $nom = readline("Quel nom : ");
    $prenom = readline("Quel prenom : ");
    $cne = readline("Quel cne : ");
    $etudiant[$i] = new Etudiant( $id, $nom,  $prenom, $cne);
    // echo $filiere[$i];
    $i++;
}

//CREATION DES TABLEAU EMPLOYE
$nbrEmploye = readline("Combien d'employé' : ");
for ($j = 1; $j <= $nbrEmploye; $j++) {
    $id = readline("EMPLOYE :\n". "Quel id : ");
    $nom = readline("Quel nom : ");
    $prenom = readline("Quel prenom : ");
    $salaire = readline("Quel salaire : ");
    $employe[$j] = new Employe ( $id,  $nom,  $prenom, $salaire);
    // echo $etudiant[$j];
}

//CREATION DES TABLEAU PROFESSEUR
$nbrProfesseur = readline("Combien de professeur' : ");
for ($k = 1; $k <= $nbrProfesseur; $k++) {
    $id = readline("PROFESSEUR :\n". "Quel id : ");
    $nom = readline("Quel nom : ");
    $prenom = readline("Quel prenom : ");
    $salaire = readline("Quel salaire : ");
    $specialite = readline("Quel specialite : ");
    $Professeur[$k] = new Professeur ( $id, $nom, $prenom, $salaire, $specialite);
    // echo $etudiant[$j];
}

echo "La liste des employés : \n";
for ($i=1; $i <= $nbretudiant ; $i++) { 
    echo $etudiant[$i];
    echo PHP_EOL;
}
echo "La liste des étudiants :\n";
for ($j=1; $j <= $nbrEmploye ; $j++) { 
    echo $employe[$j];
    echo PHP_EOL;
}
echo "La liste des professeurs :\n";
for ($k=1; $k <= $nbrProfesseur ; $k++) { 
    echo $Professeur[$k];
    echo PHP_EOL;
}



