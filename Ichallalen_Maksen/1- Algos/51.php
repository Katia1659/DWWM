<?php
/*Soit T un tableau de N réels. Ecrire un algorithme qui permet de
calculer le nombre des occurrences d'un nombre X (c'est-à-dire
combien de fois ce nombre X figure dans le tableau T).
*/

//On défini le tableau et les variables
$tab = array( );
$occ = readline('Quelle est l occurence choisis ? ');
$c = 0;
//On crée un tableau qui génère des nombres aléatoires
    for ($j=0; $j <12 ; $j++) { 
        $c2 = random_int(10,20);
        $tab[$j] = $c2; 
    }

//On parcours le tableau et regarde si l'occurence apparait et a combien de reprise
    for ($i=0; $i < count($tab) ; $i++) { 
        if ($occ==$tab[$i]) {
            $c++;            
        }
    }

    //On affiche le tableau pour que l'utilisateur puisse vérifier(Facultatif)

    for ($j=0; $j <12; $j++) { 
            echo $tab[$j].' | ';
    }
//On renvoie la réponse
    echo "\n".'L Occurence ' .$occ .' apparaît '. $c.' dans le tableau';




?>

