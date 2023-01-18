<?php

// 1. Quelle est la différence entre php et html ?
// (Dites-le en quelques lignes seulement)

"HTML est un langage de balisage front-end alors que PHP est un langage de script back-end";

// 2. À quoi servent les fonctions `include`, `include_once`, `require` et `require_once` ?
"Include : permet d'inclure et d'exécuter un fichier dans une autre page 

Require : fait la même chose mais le script continue de s'éxécuter même si PHP ne trouve pas le fichier

Include_once & Require_once : fonctionne comme include et require à la difference que le fichier sera importer une fois seulement
";

// 3. À quoi servent les variables `$_GET` et `$_POST` ?
'$_GET est une variable superglobale qui lie les données à la requête que l on envoi au serveur, permet de transmettre des infos non confidentiels(données visible)'.
'$_POST sépare l envoi des données de la requête au serveur' ;

// 4. À quoi sert la variable `$_SESSION` ?
"Permet de sécuriser les informations d'un utilisateur en créant une nouvelle session à chaque nouvelle connexion, plus sécurisé que les cookies";

// 5. De quel type de données sont les variables `$_GET`, `$_POST` et `$_SESSION` ?
"De type superglobale ou variable globale automatique";

// 6. Quelles sont les failles de sécurité auxquelles un site php est vulnérable ?
//
//     a) les failles dues au navigateur
//     b) les failles dues à flash ou à un autre plugin du navigateur
//     c) les failles dues à l'interpréteur de commande
//     d) les failles dues à l'injection de code javascript
//     e) les failles dues à l'injection de code php
//     f) les failles dues à l'injection de code sql
//     g) les failles dues à des attaques de site croisées

