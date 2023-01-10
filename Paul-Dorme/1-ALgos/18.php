<?php 
/* Ecrire u algo qui demande âge enfant à l'user info sur catégorie:
- Poussin 6à7 ans
- Pupille de 8à9 ans
-Minime de 10à11 ans
-Cadet 12 et +
*/

$age = readline('Age de l enfant ?');


if ($age <6) {
    echo "Trop jeune";
    }
    else if ($age >=6 and $age<=7) {
        echo "Poussin";
        }else if ($age >=8 and $age <= 9) {
            echo "Pupille";
            }else if($age >= 10 and $age <= 11) {
                echo "Minime";
                }else {
                    echo "Cadet";
                }

?>