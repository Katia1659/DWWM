<?php

/*

traduire les blocs conditionnels `if` en blocs conditionnels `switch`

résultat attendu :
vous êtes sur la page d'accueil

*/

$page = 'home';
switch ($page) {
    case 'about':
        echo "vous êtes sur la page « à propos »"."\n";
        break;
    case 'contact':
        echo "vous êtes sur la page « contact »"."\n";
        break;
    case 'home':
        echo "vous êtes sur la page « accueil »"."\n";
        break;
    default:
        echo 'page non trouvée :('."\n";
        break;
}
/*
if ($page == 'about') {
    echo 'vous êtes sur la page « à propos »';
    echo PHP_EOL;
} else if ($page == 'contact') {
    echo 'vous êtes sur la page « contact »';
    echo PHP_EOL;
} else if ($page == 'home') {
    echo 'vous êtes sur la page d\'accueil';
    echo PHP_EOL;
} else {
    echo 'page non trouvée :(';
    echo PHP_EOL;
}
*/
