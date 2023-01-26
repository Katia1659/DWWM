<?php

include "../modele/functions.php";
//Cette ligne inclut le fichier "functions.php" grace au chemin. Elle permet d'utiliser les fonctions

session_start();
/*Cette ligne demarre une nouvelle session, elle doit etre appelée au début d'un script php afin d'utiliser les variables sessions. Une fois qu'une session
 a été démarrée, vous pouvez stocker et récupérer des données sous forme de variables de session, qui persistent à travers plusieurs pages de votre site 
 web. Les variables de session sont stockées sur le serveur, elles sont donc plus sécurisées que les cookies, qui sont stockés sur le navigateur client*/

$_SESSION = NULL;
/* variable superglobale La variable superglobale $_SESSION est utilisée pour stocker et récupérer des variables de session. En la définissant à NULL, 
toutes les variables de session qui ont été précédemment stockées dedans sont supprimées et la session en cours est détruite
*/

$listPlaces = array(
    'Place_1',
    'Place_2',
    'Place_3',
    'Place_4',
    'Place_5',
    'Place_6',
    'Place_7',
    'Place_8',
    'Place_9',
    'Place_10',
    'Place_11',
    'Place_12',
    'Place_13',
    'Place_14',
    'Place_15',
    'Place_16'
);

$filePath=$_FILES['file']['tmp_name'];
$listStag = readFileToArray($filePath);

$listStagPlaces = generateStagPlaces($listPlaces, $listStag);


// $listStagPlaces = randomizePlacesStag($listStagPlaces);


$listStagPlaces = saveListStagToJson($listStagPlaces);


// $listStagPlaces = jsonToArray($filePath);



$listStagPlace = placesStagRotate($listStagPlaces);

$_SESSION['$listStagPlace'] = $listStagPlace;
/*stocker la valeur de la variable $listStagPlace dans la variable de session $_SESSION['$listStagPlace']. la variable $_SESSION est un tableau superglobal
qui permet de stocker et de récupérer des données à travers plusieur page  Les valeurs stockées dans le tableau $_SESSION 
sont stockées sur le serveur, ce qui vous permet de maintenir des données à travers plusieurs pages
Ceci va servir a mettre dans le HTML les valeur de la fonctionn, on stokce dans la variable $_session le résultat des fonctions 
*/

header('Location: ../views/affichage.php');
/*Permet de rediriger vers la page affichage grace a son chemin. La fonction header() envoie un en-tête HTTP au navigateur, qui peut être utilisé pour 
rediriger l'utilisateur vers une nouvelle page, définir des cookies et effectuer d'autres tâches. Dans ce cas, la header('Location: ../views/affichage.php') 
envoie un en-tête 'Location' au navigateur, qui entraîne la redirection vers la page spécifiée.

*/

?>