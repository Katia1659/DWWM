<?php
//fonction qui permet de convertir un tableau associatif en tableau multidimenssionnel.
function generateTabMulti(array $placeStags): array
{
    $tabMulti = [];
    $placeStags = preg_replace('/\s+/', ',', $placeStags);
    foreach ($placeStags as $key => $value) {
        $line = $value . ','. $key;
        $values = explode(",", $line);
        $tabMulti[] = $values;
    }
    return $tabMulti;
}
//Fonction qui récupère les valeurs d'un fichier et le transforme en tableau
function readFileToArray(string $filePath): array
{
    return file($filePath, FILE_IGNORE_NEW_LINES);
}

//Fonction qui assemble deux tableau pour faire un tableau associatif.
function generateStagPlaces(array $listPlaces, array $listStag): array
{
    return array_combine($listPlaces, $listStag);
}



//Fonction qui se connect a la bdd
function connectBdd(): object
{
    $bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root',
        '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $bdd;
}

//Fonction pour inserer un tableau dans une base de données
function insertStagiaires(array $listStag): bool
{
    //Chaine de connexion à la base de donnée
    $bdd = connectBdd();
    $status = false;
    foreach ($listStag as $stag) {
        $sql = "INSERT INTO stagiaire (nom, prenom, place) VALUES (?,?,?)";
        $stmt = $bdd->prepare($sql);
        $status = $stmt->execute($stag);

    }
    return $status;

}

//Fonction qui recupère les donnees de la base de données
function selectStagiaires(): array
{
    $bdd = connectBdd();
    $sql = "SELECT * FROM stagiaire";
    $stmt = $bdd->query($sql);
    $array = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $array;
}

//Fonction qui permet de modifier les donnees de la base de données a partir d'un formulaire
function updateStagiaires(): bool
{
    //Chaine de connexion à la base de donnée
    $bdd = connectBdd();
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $sql = "UPDATE stagiaire SET NOM='$nom', PRENOM='$prenom' WHERE ID='$id'";
    $stmt = $bdd->prepare($sql);
    $status = $stmt->execute();

    return $status;
}

//Fonction qui permet de supprimer les donnees de la base de données
function deleteStagiaires(): bool
{
    $bdd = connectBdd();
    $id = $_POST['id'];
    $status = false;
    $sql = "DELETE FROM stagiaire WHERE ID= $id";
    $stmt = $bdd->prepare($sql);
    $status = $stmt->execute();
    return $status;
}

