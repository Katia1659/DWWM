<?php
    /*
    Ecrire un algorithme qui demande deux nombres à l'utilisateur et l'informe ensuite si leur produit est négatif ou positif
    (on laisse de côté où le produit est nul). Attention toutefois : on ne doit pas calculer le produit des deux nombres.

    var nbUn nbDeux : entier;
    debut
        ecrire('Entrez le premier nombre :')
        Lire <- nbUn
        ecrire('Entrez le deuxieme nombre')
        Lire <- nbDeux
        SI nbUn > 0  ET nbDeux > 0 alors
            debut si
                ecrire('Le nombre est positif')
            fin si
        Sinon si nbUn < 0 ET nbDeux < 0 alors
            debut sinon
                ecrire('Le nombre est positif')
            fin sinon
        Sinon si nbUn < 0 ET nbDeux > 0 alors
            debut sinon
                ecrire('Le nombre est negatif')
            fin sinon
        Sinon si nbUn > 0 ET nbDeux < 0 alors
            debut sinon
                ecrire('Le nombre est negatif')
            fin sinon
    fin
    */
    // Demande à l'utilisateur de saisir 2 nombres
    $nbUn = readline('Entrez le premier nombre :');
    $nbDeux = readline('Entrez le deuxieme nombre:');

    // Informe si les deux nombres saisir sont négatif ou positif.
    if ($nbUn > 0 && $nbDeux < 0) 
    {
        echo 'Le nombre est negatif';
    }
    elseif ($nbUn < 0 && $nbDeux < 0) 
    {
        echo 'le nombre est positif';
    }
    elseif ($nbUn > 0 && $nbDeux > 0) {
        echo 'le nombre est positif';
    }
    elseif ($nbUn < 0 && $nbDeux > 0) 
    {
        echo 'Le nombre est negatif';
    }

?>