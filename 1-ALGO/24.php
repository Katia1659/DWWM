<?php
/*Les habitants de paris paient l'impôt selon les règles suivantes:
    -les hommes de plus de 20 ans paient l'impôt
    -les femmes paient l'impôt si elles ont entre 18 et 35 ans
    -les autres ne paient pas d'impôt
Le programme demandera donfc l'âge et le sexe du parisien, et se prononcera donc ensuite sur le fait que l'habitant est imposables.
début
écrire "entrer votre âge"
lire(age)
écrire "taper 1 si vous êtes un homme, 2 si vous êtes une femme"
lire(sexe)
Si (sexe = 1 et age >= 20) alors
    écrire "l'habitant est imposable"
Sinon si (sexe = 2 et age >= 18 et age <= 35) alors
    écrire "l'habitante est imposable"
Sinon
    écrire "l'habitant ne paie pas l'impôt"
fin si
fin
*/
echo "début\n";
$age = readline ('entrez votre âge :');
$sexe = readline('Noter votre sexe H/F');
if ($age > 19 and ($sexe == 'H' or $sexe == 'h')) {
    echo 'l habitant est imposable' ;
} else if($age > 17 and $age < 36 and ($sexe == 'F' or $sexe == 'f')) {
    echo 'l habitante est imposable' ;
} else {
    echo 'l habitant ne paie d impot' ;
}
echo "\n" ;
echo 'fin' ;
?>
