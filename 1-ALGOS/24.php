<?php 

/* Exercice 24 

Les habitants de Paris paient l'impôt selon les règles suivantes : 
- Les hommes de plus de 20 ans paient l'impôt 
- Les femmes paient l'impôt si elles ont entre 18 et 35 ans
- les autres ne paient pas d'impôt 
Le programme demandera donc l"âge et le sexe du parisien, et se prononcera donc ensuite sur le fait que l'habitant est imposable

*/

// On demande à l'utilisateur de saisir son âge et son genre

$age = readline('Saisissez votre âge : ' );
$sexe = readline ('Saisissez votre genre : H ou F : ');

// On utilise des conditions afin de décrire dans quel cas on paie l'impôt ou non, et on l'affiche. 

if ($age > 20 && $sexe='H') {
    echo "Vous payez l'impôt";
}

else
    if ($age >= 18 && $age <= 35 && $sexe ='F') {
        echo "Vous payez l'impôt";
    

    } else {
        echo "Vous ne payez pas d'impôt";
    }

