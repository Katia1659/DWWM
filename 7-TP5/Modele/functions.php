<?php




// Fonction pour ouvrir un fichier texte contenant les différentes places

function readFileToArray(string $filePath): array
{
    $listStag = file($filePath, FILE_IGNORE_NEW_LINES);
    return $listStag;
}





// Création d'un tableau qui donne des places à chaque personne

function generateStagPlaces(array $listPlaces, array $listStag): array
{
    $tableau = array_combine($listPlaces, $listStag);
    return $tableau;
}




// Fonction pour mélanger les personnes afin de les changer de place

function randomizePlacesStag(array $listStagPlaces): array
{
    $values = array_values($listStagPlaces);
    $keys = array_keys($listStagPlaces);
    shuffle($values);
    $listStagPlaces = array_combine($keys, $values);


    return $listStagPlaces;
}




// Fonction afin de créer un fichier qui sauvegarde les nouvelles places avec la date dans le titre

function saveListStagToJson(array $listStagPlaces): string
{
    $date = date('d-m-y h-i-s');
    if (!is_dir('Save')) {
        mkdir('Save');
    }

    $dir = "Save\Save.json";
    $json = json_encode($listStagPlaces);
    file_put_contents($dir, $json);

    return $dir;
}

//saveListStagToFile($listStagPlaces);
function jsonToArray(string $filePath): array
{
    if (file_exists('Save/Save.json')) {
        $filePath = 'Save/Save.json';
    }
    
    $json = file_get_contents($filePath);
    return json_decode($json, true);
}

// Change de place chaque stagiaire, le décale d'une place vers la gauche
function placeStagRotate(array $listStagPlaces): array
{

    $keys = array_keys($listStagPlaces);
    $values = array_values($listStagPlaces);
    $last_value = array_pop($values);
    array_unshift($values, $last_value);

    $listStagPlaces =  array_combine($keys, $values);
    $saveJson = json_encode($listStagPlaces);
    file_put_contents('Save/Save.json', $saveJson);
    
    return $listStagPlaces;
}

//////////////////////////////////////////////////////

function jsonToCSV(string $saveLastJson) : void
{
    //Va chercher la dernière sauvegarde du .json
  $saveLastJson = file_get_contents('Save/Save.json');

  $CSV = 'Save/newList.csv';

 $tabJson = json_decode($saveLastJson, true);

$i = 0;
//Concaténation
foreach ($tabJson as $place => $nomStag) {

    $tabCSV[1]='place'.';'.str_replace(" ",";",'NOM PRENOM')."\n";
    $tabCSV[$i]=$place.';'.str_replace(" ",";",$nomStag)."\n";
    $i++;
}

file_put_contents($CSV,$tabCSV);


}

// function arrayToCSVcombineArray(array $listPlaces, array $listStag): array
// {


// $tableau = array_combine($listPlaces, $listStag);




//  $i = 0;
//  $handle = fopen('tabInCSV.csv','r+');
//  $delimiter = ',';
//  $enclosure = ' " ';

 
//  //Concaténation
//  foreach ($tableau as $place => $nomStag) {
 
//      $tabCSV[1]='place'.';'.str_replace(" ",";",'NOM PRENOM')."\n";
//      $tabCSV[$i]=$place.';'.str_replace(" ",";",$nomStag)."\n";
//      $i++;
//      fputcsv($handle,$place,$delimiter,$enclosure);
//  }

//  rewind($handle);
//  while (!feof($handle)) {
//       $contents .= fread($handle, 8192);
//  }
//  fclose($handle);
//  echo $contents;  

 function arrayToCSVcombineArray(array $listPlaces, array $listStag): void
 {
     $tableau = array_combine($listPlaces, $listStag);
 
     $handle = fopen('tabInCSV.csv', 'w');
$delimiter = ',';
 $enclosure = '"';
 
 fputcsv($handle, ['place', 'nom' ,'prenom'], $delimiter, $enclosure);
 
 foreach ($tableau as $place => $nomStag) {
     fputcsv($handle, [$place, $nomStag], $delimiter, $enclosure);
 }
 
 fclose($handle);
 }

 function separateInfo($data) {
 $result = [];
 foreach ($data as $row) {
     $columns = explode(',', $row);
     $place = trim($columns[0]);
     $full_name = trim($columns[1], '" ');
     $name_parts = explode(' ', $full_name);
     $nom = $name_parts[0];
     $prenom = $name_parts[1];
     $result[] = [$place, $nom, $prenom];
 }
 return $result;
}

