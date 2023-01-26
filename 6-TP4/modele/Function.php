<?php

//Groupe : Baptiste, Jean-Baptiste, Florian, Maksen.///////////////////
//PREMIERE FONCTION ///////////////////////////////////////////////////
function readFileToArray(string $filePath): array
{
    $listStag = file($filePath, FILE_IGNORE_NEW_LINES);
    return $listStag;
}
// function places($listestag){
// for ($i=1; $i <=count($listestag) ; $i++) { 
//     $listeplace[$i] = array("Place_$i");
//  }
// }
//Au dessus on crée des places avec une boucles for dans un fonction

//FIN DE LA PREMIERE FONCTION /////////////////////////////////////////
//DEUXIEME FONCTION////////////////////////////////////////////////////

function generateStagPlaces(array $listStag, array $listPlaces): array
{
    $listStagPlaces = array_combine($listStag, $listPlaces);
    return $listStagPlaces;
}

//FIN DEUXIEME FONCTION////////////////////////////////////////////
//TROISIEME FONCTION /////////////////////////////////////////////

function saveListStagToJson(array $listStagPlaces): string
{
    if (!file_exists('../modele/Save_Backup')) {
        mkdir('../modele/Save_Backup');
    }
    $contenu = "";
    foreach ($listStagPlaces as  $k => $v) {
        $contenu .= "$k => $v" . PHP_EOL;
    }
    $json_encode = json_encode($listStagPlaces, true);
    file_put_contents("..\modele\Save_Backup\Backup.json", $json_encode, true);
    $filePath = "!..\modele\Save_Backup\Backup.json";
    return $filePath;
}
//FIN TROISIEME FONCTION /////////////////////////////////////////////
//QUATRIEME FONCTION /////////////////////////////////////////////////
// function saveListStagToFile(array $place_a_stagiaire): void{
//     $date= date('d-m-y__h~i~s');  
//     $fichier = fopen("C:\Users\makse\OneDrive\Bureau\TP 1\Save\Backup_$date.txt","w+"); 
//     $texte ="";
//     $titre = "Voici la liste des places attribués :";
//     foreach ($place_a_stagiaire as $key => $value) {
//         $texte .= "$key => $value"."\n";
//     }
//     fwrite($fichier,$titre."\n"."\n".$texte);    
// }
//Exercice donné avec date backup
function randomizePlacesStag(array $listStagPlaces): array
{
    $new = array();
    $values = array();
    $values = array_values($listStagPlaces);
    shuffle($values);
    $new = array_combine(array_keys($listStagPlaces), $values);
    return $new;
}


//FIN QUATRIEME FONCTION /////////////////////////////
//DEBUT CINQUIEME FONCTION ///////////////////////////
function placeStagRotate(string $listPlaceStag): array
{
    if (file_exists("../modele/Save_Backup\Backup.json")) {
        $listPlaceStag = "../modele/Save_Backup\Backup.json";
    }
    $json = file_get_contents($listPlaceStag);
    $listStagPlaces = json_decode($json, true);
    $key = array_keys($listStagPlaces);
    $value = array_values($listStagPlaces);
    $value_last = array_pop($value);
    array_unshift($value, $value_last);
    $listStagPlaces = array_combine($key, $value);
    $json = json_encode($listStagPlaces, true);
    file_put_contents("../modele/Save_Backup/Backup.json", $json);
    return $listStagPlaces;
}



//FIN CINQUIEME FONCTION ////////////////////////////////////

//FONCTION SIX, METTRE DANS UN TABLEAU .CSV//////////////////

function generateCsv($listStagPlaces)
{
    if (file_exists("../modele/Save_Backup/Backup.json")) {
        $listStagPlaces = "../modele/Save_Backup/Backup.json";
    }
    $json = file_get_contents($listStagPlaces);
    $listStagPlaces = json_decode($json, true);
    $temp = false;
    $temp = ('Place;Nom;Prénom').PHP_EOL;
    foreach ($listStagPlaces as $key => $value) {
        $keytemp = $key;
        $temp = $temp . $keytemp . ";" . str_replace(" ", ";", $value) . PHP_EOL;
    }
    $csv = '../modele/Save_Backup/Extraction_Stagiaire.csv';
    file_put_contents($csv, $temp, true);
}

