<?php
/*Ecrire un nombre algorithme d'entiers qui calcule impairs le nombre d'entiers
d'un tableau pairs et le d'entiers.
*/

$tab = array( );
$pair = 0;
$impair = 0;
//On crée un tableau qui génère des nombres aléatoires
    for ($j=0; $j <12 ; $j++) { 
        $c2 = random_int(0,20);
        $tab[$j] = $c2; 
    }

//On parcours le tableau et regarde si le nombre est pair ou impair
    for ($i=0; $i < count($tab); $i++) { 
        if ($tab[$i]%2==0) {
            $pair++;            
        }else {
            $impair++;
        }
    }

    //On affiche le tableau pour que l'utilisateur puisse vérifier(Facultatif)

    for ($j=0; $j <12; $j++) { 
            echo $tab[$j].' | ';
    }
//On affiche le résultat
    echo "\n".'Il y a donc '.$pair.' valeur pair et '.$impair.' valeur impair.';
?>

