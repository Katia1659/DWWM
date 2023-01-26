<?php




//----------------------------------------------------------------

// fonction pour lire un fichier 

function readFileToArray (string $filePath) : array {
    $fichier = file($filePath,FILE_IGNORE_NEW_LINES);
    return $fichier;
}

//----------------------------------------------------------------

// fonction combinant deux tableaux 

function generateStagPlaces( array $listStag, array $listPlace) : array {
    $tab = array_combine($listPlace, $listStag);
    return $tab;
}

//----------------------------------------------------------------

// fonction changeant les valeurs aleatoirement du tableau

function randomizePlacesStag ( array $listStagPlace) : array {
    $temp = array();
    $temp = array_values($listStagPlace);
    shuffle($temp);
    $new = array_combine(array_keys($listStagPlace), $temp);
    return $new;

}

//----------------------------------------------------------------

//fonction enregistrant dan sun fichier


// function saveListStagToFile(array $tab) : void {
//     $date = date('d-m-y_h.i.s');
//     file_put_contents($nomFichier = 'backup '.$date, print_r($tab, true), $flags = 1);
// }


//----------------------------------------------------------------


// fonction permettant d'enregistrer en json

function saveListStageToJson(array $listStagPlace): string {
    $nomFichier = '../modele/Backup.json';
        $file = json_encode($listStagPlace, true);
        file_put_contents($nomFichier, $file);  
    return $nomFichier; 
}


//-----------------------------------------------------------------

// fonction permettant de deplacer de 1 a chaque appel


function placeStagRotate (string $listPlaceStag) : array {

    //combine le tab et le tab2 (keys)/(values)
    $recup = file_get_contents($listPlaceStag);
    $key = json_decode($recup, true);
    $listNom = json_decode($recup, true);
    $temp = array_pop($listNom);
    array_unshift($listNom, $temp);
    $placeNom = array_combine(array_keys($key), array_values($listNom));

    // enregistre dans un fichier json
    
    $file = json_encode($placeNom,true);
    file_put_contents($listPlaceStag, $file);

    //affiche le tableau
    return $placeNom;
}


//-----------------------------------------------------------------


function ListStageCSV($file) :void {

    $contain = file_get_contents($file);
    $json = json_decode($contain, true);
    $fichierCsv = '../modele/extraction_Stagiaire.csv';

    $key = array_keys($json);
    $value = array_values($json);

    for ($i=0; $i < count($json) ; $i++) {
        $tabCsv[] = array($key[$i].' '. $value[$i]);
    }

    $i = 0;
    foreach ($tabCsv as $key) {
        $i++;
        $newTab[$i] = str_replace(" ", ";", $key);
    }

    $fileCsv = fopen($fichierCsv, 'w');

    foreach ($newTab as $i) {
        fputcsv($fileCsv, $i);
    }

    fclose($fileCsv);

}



?>