<?php 
    /*
    Saisir 3 entiers a , b , c et determiner dans R les racines de l'équation ax² + bx + c = 0.

    Var a,b,c,x,x1,x2,d : Entier;
    Debut
        AFFICHER "Donnez les valeurs de a , b , c";
        LIRE a;
        LIRE b;
        LIRE c;
        d <- b * b - 4 * a + c;
        Si (d > 0) Alors
            Debut si
                x1 <- (-b - sqrt(d)) / (2 * a);
                x2 <- (-b + sqrt(d)) / (2 * a);

                Ecrire("Il y a deux solution ");
                Ecrire("x1 = ");
                Ecrire(x1);
                Ecrire("x2 = ");
                Ecrire(x2);
            Fin si
        Si (d == 0) alors
            debut si
                x <- -b / (2 * a);        
                Ecrire ("La solution est x = ");
                Ecrire (x)
            Fin si
        Si (d<0) alors
            Debut si
            Ecrire("pas de solution");
            Fin si

    Fin
    */


    // On demande a l'utilisateur de saisir les variables a , b et c
    $a = readline('Veuillez saisir a :');
    $b = readline('Veuillez saisir b :');
    $c = readline('Veuillez saisir c :');

    // Calcule le delta.
    $delta = $b * $b - 4 * $a + $c;

    // Si delta est supérieur à 0 alors il execute le code suivant
    if ($delta > 0) 
    {
        $x1 = ( -$b - sqrt($delta)) / (2 * $a);
        $x2 = ( -$b + sqrt($delta)) / (2 * $a);
        echo 'Il y a deux solution, x1= '.$x1.'& x2= '.$x2 ;
    }
    // Sinon si delta égal à 0 il execute le code suivant
    elseif ($delta == 0) 
    {
        $x = -$b / (2 * $a);
        echo 'Il y a une solution x = '.$x;
    }
    else
    {
        echo 'Il ni a pas de solution';
    }


?>