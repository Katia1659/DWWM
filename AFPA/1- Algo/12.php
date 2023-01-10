<?php 
    /* 
    Ecrire un programme qui lit le prix HT d'un article,
    le nombre d'articles et le taux de tva, et qui fournit le prix total TTC correspondant.
    Faire en sorte que des libellés apparaissent clairement.(TTC = NA*HT*(1+TVA))


    Var NA,HT,TVA,TTC : Entier;
    debut
        Ecrire("Entrez le prix de l'article :");
        LIRE <- HT;
        Ecrire("Entrez le nombre d'article :");
        LIRE <- NA;
        Ecrire("Entre la TVA :");
        LIRE <- TVA;
        TTC <- NA*HT*(1+TVA);
        Ecrire("Le prix TTC est : ");
        Ecrire(TTC);
    fin
    */

    // Demande à l'utilisateur de saisir les variable ht , na et tva
    $ht = readline("Entrez le prix de l'article :");
    $na = readline("Entrez le nombre d'article :");
    $tva = readline('Entrez la TVA :');

    // Initialisation de la vairable ttc qui prend la valeur de na x ht x (1+tva)
    $ttc = $na * $ht * (1+$tva);

    // Affichage du résultat
    echo $ttc;
    echo ' = ';
    echo $na;
    echo '*';
    echo $ht;
    echo '*';
    echo '(1+';
    echo $tva;
    echo '))';




?>
