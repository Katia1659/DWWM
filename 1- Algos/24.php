<?php
/*Les habitants de paris paient l'impot selon les regles suivantes :
-les hommes de plus de 20 ans paient l'impot
-les femmes paient l'impot si elles ont entre 18 et 35 ans
-les autres ne paient pas d'impot
Le programme demandera donc l'age et le sexe du parisien, et se prononcera donc ensuite sur le fait que l'habitant est imposable

demandez l'age
demandez le sexe

si age > 20 et sexe =h
ecrire "vous payez des impots
sinon si age<18 et age>36 et sexe=f
ecrire " vous payez des impots'
sinon ecrire "vous ne payez pas d'impot"

*/

//initialisation des variables
$age = readline ('Entrez votre age :');
$sexe = readline ('Entrez votre sexe :');

//conditions
if ($age > 20 && $sexe == 'h') {
    echo ' vous payez des impots';
}elseif ($age<18 and $age>36 and $sexe=='f') {
    echo 'vous payez des impots';
}else {
    echo 'vous ne payez pas d\'impot';
}
