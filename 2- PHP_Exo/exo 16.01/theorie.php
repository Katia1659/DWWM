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



/* 1 
php est un langage de programmation, html est un langage de structuriation de page web
*/

/* 2 
include -> la fonction execute un fichier existant dans le fichier que l'on utilise.
include_once -> identique à la première sauf qu'elle inclus le fichier une seule fois. 
require -> nécessite le fichier demandé pour executé les instructions.
require_once -> identique à la réponse d'en haut mais execute le fichier une seule fois s'il y en a plusieurs.
*/ 

/* 3 
$_GET -> tableau associatifs des valeurs passée au script courant via les parametre d'url.
$_POSTt -> tableau associatifs des valeurs passée au script courant via les parametre http.
*/

/* 4
$_SESSION -> tableau associatifs des valeurs stockées dans la session et accessible au script courant .
 */

/* 5
Les variables `$_GET`, `$_POST` et `$_SESSION` sont de type table
*/

/* 6
c) les failles dues à l'interpréteur de commande.
d) les failles dues à l'injection de code javascript.
f) les failles dues à l'injection de code sql.
*/



?>