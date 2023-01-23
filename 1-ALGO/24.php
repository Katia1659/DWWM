<?php 

/*
- Les habitants de Paris paient l'impot selon les regles suivantes 
    - les hommes de plus de 20 ans paient l'impot
    - les femmes paient l'impot si elles ont entre 18 et 35 ans 
    - les autres ne paient pas d'impot
- Le programme demandera donc l'age et le sexe du parisien, et se prononcera donc ensuite sur le fait que l'habitant est imposable.
*/

// demande à l'utilisateur 
$age = readline("entrez un age : ");
$sexe = readline("entrez 1 si vous etes un homme et 2 si vous etes une femme : ");

// debut algo
if ($sexe !== 1 OR $sexe !== 2);{ 
    if ( $sexe == 1 and $age > 20) {
            echo "vous payez un impot\n";
    }else if ( $sexe == 2 and $age >= 18 and $age <= 35) {
            echo "vous payez un impot \n";
    } else {
            echo "vous payez pas d'impot";
    }
}

?>