<?php
require_once '../modele/Filiere.class.php';
require_once '../modele/Etudiant.class.php';


$numFil = readline('Combien de filiere dans votre école : ');

for ($i =1 ; $i <= $numFil ; $i++){
    $filiere = "filiere$i";
    $code = $i;
    $libelle = readline("Nom de la filiale ? :");
    $$filiere = new Filiere($code,$libelle);
}

$numEtud = readline("Combien d'etudiant : ");
for ($i = 1 ; $i <= $numEtud ; $i++){
    $f = random_int(1,$numFil);
    $filiere = "filiere$f";
    $libelle = $$filiere->getLibelle();
    $etudiant = "etudiant$i";
    $nom = readline('Votre nom : ');
    $prenom = readline('Votre prenom : ');
    $dateNaissance = readline('Votre date de naissance (dd-mm-yyyy) : ');
    $$etudiant = new Etudiant($nom, $prenom, $dateNaissance, $libelle);
}
echo "\n Les filiere de l'école : \n \n";
for ($i = 1; $i <= $numFil; $i++) {
    $filiere = "filiere$i";
    echo $$filiere;
}
echo "\n";
echo "\n";
for ($i = 1; $i <= $numFil; $i++) {
    $filiere = "filiere$i";
    $libelle = $$filiere->getLibelle();
    echo "Filiere " . $libelle . " : \n";
    for ($j = 1; $j <= $numEtud; $j++) {
        $etudiant = "etudiant$j";
        $libEtudiant = $$etudiant->getLibelle();
        if ($libelle === $libEtudiant){
            echo $$etudiant."\n";
        }
    }
}

