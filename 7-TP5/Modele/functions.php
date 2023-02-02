<?php






// Fonction pour ouvrir un fichier texte contenant les différentes places

function readFileToArray(string $filePath) : array {
    $listStag = file($filePath, FILE_IGNORE_NEW_LINES);
    return $listStag;
}





// Création d'un tableau qui donne des places à chaque personne

function generateStagPlaces(array $listPlaces, array $listStag) : array {
    $tableau = array_combine($listPlaces, $listStag);
    return $tableau;

    }

    


    // Fonction pour mélanger les personnes afin de les changer de place

    function randomizePlacesStag(array $listStagPlaces) : array {
        $values = array_values($listStagPlaces);
        $keys = array_keys($listStagPlaces);
            shuffle($values);
            $listStagPlaces = array_combine($keys, $values);


            return $listStagPlaces;
        }




// Fonction afin de créer un fichier qui sauvegarde les nouvelles places avec la date dans le titre

function saveListStagToJson(array $listStagPlaces): string {
    $date = date('d-m-y h-i-s');
    if (!is_dir('Save')) {
        mkdir('Save');
    }
    $dir = "Save\Save.json";
    $json = json_encode($listStagPlaces);
    file_put_contents($dir, $json);
    return $dir;
    

}

// //saveListStagToFile($listStagPlaces);

// function jsonToArray(string $filePath) : array 
// {
//     if(file_exists('./Save/Backup.json')) {
//         $filePath = './Save/Backup.json'; 

//     }
//     $json = file_get_contents($filePath);
//     return json_decode($json, true);
// }



function placesStagRotate(string $fichier) : array 
{
    if(file_exists($fichier)) {
        $filePath = $fichier; 

    }
    $json = file_get_contents($fichier);
    $listStagPlaces = json_decode($json, true);
    
    $keys = array_keys($listStagPlaces);
    $values = array_values($listStagPlaces);
    $last_value = array_pop($values);
    array_unshift($values, $last_value);
    $listStagPlaces =  array_combine($keys, $values);
    $saveJson = json_encode($listStagPlaces);
    file_put_contents($fichier, $saveJson);
    return $listStagPlaces;


}



function returnNom(array $listStagPlaces )  : array {

    $newTableau = $listStagPlaces;
    
    $places = array_keys($newTableau);
    $nomPrenom = array_values($newTableau);
    
    $nomPrenom = implode(' ', $nomPrenom);
    $separate = explode(' ', $nomPrenom);
    
    
        $prenoms = array();
        $noms = array();
        foreach($separate as $key => $val) {
    if($key % 2 == 0) {
        $noms[] = $val;
    } else {
        $prenoms[] = $val;
    }
}

return $noms; 
    }






function returnPrenom(array $listStagPlaces) : array 
{

    $newTableau = $listStagPlaces;
    
    $places = array_keys($newTableau);
    $nomPrenom = array_values($newTableau);
    
    $nomPrenom = implode(' ', $nomPrenom);
    $separate = explode(' ', $nomPrenom);
    
    
        $prenoms = array();
        $noms = array();
        foreach($separate as $key => $val) {
    if($key % 2 == 0) {
        $noms[] = $val;
    } else {
        $prenoms[] = $val;
    }   
}

    return $prenoms; 

} 
