<?php 
// Fonction pour ouvrir un fichier texte contenant les différentes places

function readFileToArray(string $filePath): array
{
    $listStag = file($filePath, FILE_IGNORE_NEW_LINES);
    return $listStag;
}

function readData (String $filePath): array {
    $fileArray = readFileToArray($filePath);
    $i=1;
      
    //   $place='Place_';
      foreach ($fileArray as $key => $value) {
         $tab[$i]=explode(' ',$value);
         $i++;
      }

    $place = array ();
  for ($i=1; $i<= count($tab) ; $i++) { 
    $place[$i]="Place_$i";
  }

      for ($i=1; $i < sizeof($tab); $i++) { 
        // $place[$i]="Place_".$i++;
          foreach ($tab[$i] as $key => $value) {
              if ($key == 0){
                  $nom [$i]= $value;
              }else{
                  $prenom[$i]=$value;
              }          
          }
      }
    } echo readData($filePath);