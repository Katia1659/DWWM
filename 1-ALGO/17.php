<?php 
    /* 
    Ecrire un algorithme qui demande deux nombres à l'utilisateur et l'informe ensuis si le produit est négatif ou positif
    (on inclut cette fois le traitement du cas où le produit peut etre nul)

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
        Sinon si nbUn = 0 OU nbDeux = 0 alors 
            debut sinon
                ecrire('le nombre est nul')
            fin sinon
    fin
    */

    // Demande à l'utilisateur de saisir 2 nombres
    $nbUn = readline('Entrez le premier nombre :');
    $nbDeux = readline('Entrez le deuxieme nombre:');

    // Puis affiche si le nombre est negatif , positif ou est nul.
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
    elseif ($nbUn == 0 || $nbDeux == 0) {
        echo 'Le nombre est nul';
    }
?>