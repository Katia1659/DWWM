<?php

/*

traduire les blocs conditionnels `if` en blocs conditionnels `switch`

résultat attendu :
vous êtes sur la page d'accueil

*/

$page = 'home';

switch ($page) {
    case $page == 'about':
        # code...
            break;
    
    case $page == 'contact':
        echo 'vous êtes sur la page « contact »';
        echo PHP_EOL;
            break;
    
    case $page == 'home':
        echo 'vous êtes sur la page d\'accueil';
        echo PHP_EOL;
            break;

    default:
        echo 'page non trouvée :(';
        echo PHP_EOL;
            break;
}
