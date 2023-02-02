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

//Prend un fichier .json et le transforme en .csv
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

    
// function insertprenom($listStagPlaces){


//     $newTableau = $listStagPlaces;
    
//         $k = array_keys($newTableau);
//         $v = array_values($newTableau);
    
//         $v = implode(' ', $v);
//         $separate = explode(' ', $v);
    
    
//             $prenoms = array();
//             $noms = array();
//             foreach($separate as $key => $val) {
//         if($key % 2 == 0) {
//             $noms[] = $val;
//         } else {
//             $prenoms[] = $val;
//         }
    
//     }
    
//     return $prenoms;
    
//     }
    
//     function insertnom($listStagPlaces){
    
    
//         $newTableau = $listStagPlaces;
    
//             $k = array_keys($newTableau);
//             $v = array_values($newTableau);
    
//             $v = implode(' ', $v);
//             $separate = explode(' ', $v);
    
    
//                 $prenoms = array();
//                 $noms = array();
//                 foreach($separate as $key => $val) {
//             if($key % 2 == 0) {
//                 $noms[] = $val;
//             } else {
//                 $prenoms[] = $val;
//             }
    
//         }
//         return $noms;
//         }
//     //
function readData (String $filePath): array {
    $tab = readFileToArray($filePath);
    
    $i=0;
    $j=0;

    foreach ($tab as $key => $value) {
       $tab[$i]=explode(' ',$value);
       $i++;
    }
    for ($i=0; $i < sizeof($tab) ; $i++) { 
        foreach ($tab[$i] as $key => $value) {
            if ($key == 0){
                $nom [$i]= $value;
            }else{
                $prenom[$i]=$value;
            }   
        }
        $tabStag[$i] = array(
            $nom[$i],
            $prenom[$i],
            "Place_".$j++
        );
    }
      return $tabStag;
  }


function array_to_table($maListe) 
{   
   echo "<table>";

   // Table header
        foreach ($maListe[0] as $key=>$row) {
            echo "<th>".$key."</th>";
        }

    // Table body
       foreach ($maListe as $row) {
           echo "<tr>";
           foreach ($row as $element) {
                 echo "<td>".$element."</td>";
           } 
          echo "</tr>";
       } 
   echo "</table>";}