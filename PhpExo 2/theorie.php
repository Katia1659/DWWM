<?php

// 1. Quelle est la différence entre php et html ?
// (Dites-le en quelques lignes seulement)

HTML est un language de balise orienté front-end tandis que le PHP est un language script orienté back-end

// 2. À quoi servent les fonctions `include`, `include_once`, `require` et `require_once` ?

include = inclut et exécute un fichier
include_once = inclut et évalue le fichier spécifié durant l éxection du script
require = require est identique à include mis à part le fait que lorsqu une erreur survient, il produit également une erreur fatale
require_once = identique à require mis à part que PHP vérifie si le fichier a déjà été inclus, et si c est le cas, ne l inclut pas une deuxième fois.

// 3. À quoi servent les variables `$_GET` et `$_POST` ?

$_GET = cette variable permet de vous donner les valeurs des informations indiquées dans l url
$_POST = permet aux page de communiquer entre eux

// 4. À quoi sert la variable `$_SESSION` ?

$_session = stocker des informations qui seront automatiquement transmises de page en page pendant toute la durée de visite d un internaute sur votre site

// 5. De quel type de données sont les variables `$_GET`, `$_POST` et `$_SESSION` ?

Pour les traitement de formulaire 

// 6. Quelles sont les failles de sécurité auxquelles un site php est vulnérable ?
//
//     a) les failles dues au navigateur
//     b) les failles dues à flash ou à un autre plugin du navigateur
//     c) les failles dues à l'interpréteur de commande
//     d) les failles dues à l'injection de code javascript
//     e) les failles dues à l'injection de code php
//     f) les failles dues à l'injection de code sql
//     g) les failles dues à des attaques de site croisées

Des injections SQL

