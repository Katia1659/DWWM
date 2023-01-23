<?php
/* Les habitants de paris paient l'impôt selon les règles suivantes :
- les hommes de plus de 20 ans paient l'impôt
- les femmes paient l'impôt si elles ont entre 18 et 35 ans
- les autres ne paient pas d'impot
Le programme demandera donc l'âge et le sexe du parisien, et se prononcera donc ensuite sur le fait que l'habitant est imposable.*/
$sexe = readline ("Entrez votre sexe (homme ou femme) : ");
$age = readline ("Entrez votre âge :");


if ($sexe == "homme") {
        if ($age > 20 and $sexe == "homme" )   {
        echo "Vous êtes imposable";
        }
        else {
            if ($sexe == "homme") {

                echo
             "Vous êtes pas imposable";
            }
        }
        }

if ($sexe == "femme" and $age >=18 and  $age <=35) {
            echo "Vous êtes imposable";        
    }
    else {
        if ($sexe == "femme") {
        echo "Vous êtes pas imposable";
            }
        }

?>
