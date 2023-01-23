<?php

// 1. Quelle est la différence entre php et html ?
// (Dites-le en quelques lignes seulement)

"Le HTML est la base d'une page web, dans laquelle on inclue le contenu que l'ont va afficher en front, sans elle le site ne 
peux pas exister, s'afficher visuellement pour l'utilisateur.Il créer la structure avec des balises.
 Le PHP quand à lui est supplément pour le back, c'est un langage de script qui rend dynamique la page et qui fournis du contenu au HTML.
executé par un serveur
"; 

// 2. À quoi servent les fonctions `include`, `include_once`, `require` et `require_once` ?

$include = "Permet de récuper les données d'une autre page php, d'un fichier, dans la page php, comme récupérer des variables. Il affiche un E_Warning si le chemin du fichier n'est pas trouvé pour prévenir.";
$include_once = "Même fonctionnalité que l'include mais comme son nom l'indique il s'il à déja été inclus alors il ne pourras pas l'etre de nouveau évitant ainsi des redéfinitions de variables.";
$require = "Même chose que pour le include mais afficheras si le chemin n'est pas trouvé un E_Error ce qui stoppera le script au lieu de juste alerter";
$require_once = "Même chose que pour le require mais il va vérifier si le fichier à déja été inclus et dans ce cas ne le réinclu pas";

// 3. À quoi servent les variables `$_GET` et `$_POST` ?
"La variable $_get et la variable $_post servent à récupérer des données envoyés dans un URL. £_get récupère les info de l'url tandis que $_post ne récupère que celles qui sont passées par un formulaire post.";


// 4. À quoi sert la variable `$_SESSION` ?
"$_Session sert à stocker un identifiant pour la personne qui c'est connecté.";

// 5. De quel type de données sont les variables `$_GET`, `$_POST` et `$_SESSION` ?
"Ce sont des tableaux associatifs";
// 6. Quelles sont les failles de sécurité auxquelles un site php est vulnérable ?
//
//     a) les failles dues au navigateur
//     b) les failles dues à flash ou à un autre plugin du navigateur
//     c) les failles dues à l'interpréteur de commande
     "d) les failles dues à l'injection de code javascript";
    " e) les failles dues à l'injection de code php";
     "f) les failles dues à l'injection de code sql";
//     g) les failles dues à des attaques de site croisées

