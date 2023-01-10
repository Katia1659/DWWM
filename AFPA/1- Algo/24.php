<?php 
    /*
    Les habitant de paris paient l'impot selon les règles suivantes : 
        Les hommes de plus de 20 ans paient l'impot.
        Les femmes paient l'impot si elles ont entre 18 et 35 ans.
        les autres n,e paient pas d'impôt.
    Le programme demandera donc l'age et le sexe du parisien, et se prononcera donc ensuite sur le fait que l'habitant est imposable.

    Var age : Entier;
    Var sexe: Caractère;

    Debut
        Ecrire("Veuillez saisir votre age :");
        Lire age;
        Ecrire("Etes vous un homme ou une femme ?");
        Lire sexe;
        Si age >= 20 ET sexe = homme alors
            debut si
                Ecrire('Vous etes imposable');
            fin si
        
        Sinon si age >= 18 ET age =< 35 ET sexe = femme alors
            debut sinon
                Ecrire('Vous etes imposable');
            fin sinon
        Sinon
            debutsinon
                Ecrire('Vous etes non imposable')
            fin sinon
    fin
    */

    // Demande à l'utilisateur de saisir son age et son sexe.
    $age = readline('Veuillez saisir votre age :');
    $sexe = readline("Vous etes un 'homme' ou une 'femme' ?");

    // condition
    $c =$age >= 20 && $sexe == "homme" || $age >= 18 && $age <= 35 && $sexe == "femme";

    // Affiche si la personne est imposable ou non en fonction des conditions.
    if ($c) 
    {
        echo 'Vous etes imposable';
    }
    else 
    {
        echo 'Vous etes non imposable';
    }

?>