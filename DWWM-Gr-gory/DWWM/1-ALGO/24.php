<?php
/* 
Les habitants de paris paient l'impôt selon les règles suivantes :
- les hommes de plus de 20 ans paient l'impôt
- les femmes paient l'impôt si elles ont entre 18 et 35 ans
- les autres ne paient pas d'impôt
Le programme demandera donc l'âge et le sexe du parisien, et se
prononcera donc ensuite sur le fait que l'habitant est imposable.
Debut 
lire age
lire sexe
si (sexe = M et age >= 20) ou (sexe = F et age >18 et age <35) => imposable
sinon => non imposable
*/

$age = readline("Entrez votre age : ");
$sexe = readline("Entrez votre sexe (F/M) : ");
if ($sexe == 'M' and $age >= 20)  {
    echo 'Imposable';
}
elseif ($sexe == 'F' and $age >=18 and $age <=35) {
    echo 'Imposable';
}
else {
    echo 'Non imposable';
}