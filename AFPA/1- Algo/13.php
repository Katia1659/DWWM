<?php 
    /* 
    Ecrire un algorithme qui demande un nombre à l'utilisateur, 
    et l'informe ensuite si ce nombre est positif ou négatif
    (on laisse de côté le cas où le nombre vaut zéro).


    Var nb : Entier;
    debut
        Ecrire("Entrez un nombre :");
        LIRE <- nb;
        SI nb < 0 alors
            debut si
                Ecrire('Le nombre est négatif')
            fin_si
        Sinon si nb > 0 alors
            debut sinon
                Ecrire('Le nombre est positif')
            fin sinon
    fin
    */

    // Demande à l'utilisateur de saisir un nombre.
    $nb = readline('Entre un nombre :');

    // Execute ce code si nb est nagatif.
    if ($nb < 0) 
    {
        echo 'Le nombre est négatif';
    }
    // Execute ce code si nb est positif.
    elseif($nb > 0) 
    {
        echo 'Le nombre est positif';
    }
?>