<?php
/*Les habitants de paris paient l'impôt selon les règles suivantes :
- les hommes de plus de 20 ans paient l'impôt
- les femmes paient l'impôt si elles ont entre 18 et 35 ans
- les autres ne paient pas d'impôt
Le programme demandera donc l'âge et le sexe du parisien, et se
prononcera donc ensuite sur le fait que l'habitant est imposable.

Pour se faire on aura deux variables, l'age "age" et le sexe "sexe,
on posera les deux questions puis à l'aide de IF on retorquera une réponse
adéquat.

*/

$age = readline('Quel est votre âge ? ');
$sexe = readline('Quel est votre genre ? (M ou F)');

if (($sexe=='F') and ($age>17 and $age<36)) {
    echo 'Vous êtes imposable.';
}elseif ($sexe=='M' and $age>19) {
    echo 'Vous êtes imposable';
}else {
    echo 'Vous n êtes donc pas imposable';
}


?>
