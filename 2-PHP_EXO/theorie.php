<?php

// 1. Quelle est la différence entre php et html ?
// (Dites-le en quelques lignes seulement)

// 2. À quoi servent les fonctions `include`, `include_once`, `require` et `require_once` ?

// 3. À quoi servent les variables `$_GET` et `$_POST` ?

// 4. À quoi sert la variable `$_SESSION` ?

// 5. De quel type de données sont les variables `$_GET`, `$_POST` et `$_SESSION` ?

// 6. Quelles sont les failles de sécurité auxquelles un site php est vulnérable ?
//
//     a) les failles dues au navigateur
//     b) les failles dues à flash ou à un autre plugin du navigateur
//     c) les failles dues à l'interpréteur de commande
//     d) les failles dues à l'injection de code javascript
//     e) les failles dues à l'injection de code php
//     f) les failles dues à l'injection de code sql
//     g) les failles dues à des attaques de site croisées


/* 1) La principale différence entre HTML et PHP est que HTML est un langage de balisage utilisé pour spécifier le contenu d'une page Web, tandis que PHP est un langage de script. Les pages Web créées en utilisant uniquement HTML sont des pages Web statiques et elles seront toujours les mêmes à chaque ouverture. */


/* 2 ) La fonction include() renverra une erreur de type WARNING si elle n'arrive pas à ouvrir le fichier en question. De ce fait l'exécution du code qui suit dans la page sera exécuté. En revanche, la fonction require() affichera une erreur de type FATAL qui interrompt l'exécution du script. 

Les fonctions require_once() et require_once() permettent d'importer une fois seulement un fichier même s'il y'a plusieurs tentatives d'importation du fichier dans la page.

*/

/* 3 ) Les deux variables $_GET et $_POST sont utilisées pour lire les informations envoyées dans un tableau à partir du code HTML avec les méthodes get et post et capturées par le serveur PHP. En d'autres mots, les variables $_GET et $_POST permet aux page de communiquer entre eux.

Avec la variable Get, les éléments envoyés par formulaire ne sont pas sécurisés et apparaissent dans la barre d'adresse, alors que ce n'est pas le cas avec la méthode Post. la méthode Post est donc plus sécurisée que la méthode Get. 

/* 4 ) Une session en PHP correspond à une façon de stocker des données différentes pour chaque utilisateur en utilisant un identifiant de session unique.

Les identifiants de session vont généralement être envoyés au navigateur via des cookies de session et vont être utilisés pour récupérer les données existantes de la session.

Un des grands intérêts des sessions est qu’on va pouvoir conserver des informations pour un utilisateur lorsqu’il navigue d’une page à une autre. De plus, les informations de session ne vont cette fois-ci pas être stockées sur les ordinateurs de vos visiteurs à la différence des cookies mais plutôt côté serveur ce qui fait que les sessions vont pouvoir être beaucoup plus sûres que les cookies.