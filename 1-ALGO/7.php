
<?php

/*
On dispose de trois variables A, B et C. Ecrivez un algorithme transférant à B la valeur de A, à C la valeur de B et à A la valeur de C.
A <- 2 
B <- 7   
C <- 9
temp <- B
B <- A
A <- C
C <- temp

1 A <- 2       B <- ?        C <- ?           temp <- ?
2 A <- 2       B <- 7        C <- ?           temp <- ?
3 A <- 2       B <- 7        C <- 9           temp <- ?
4 A <- 2       B <- 7        C <- 9           temp <- 7
5 A <- 2       B <- A = 2    C <- 9           temp <- 7
6 A <- C = 9   B <- 2        C <- 9           temp <- 7
7 A <- 9       B <- 2        C <- temp = 7    temp <- 7

*/

//affecte des valeurs aux variables
$a = 2;
$b = 7;
$c = 9;
$temp = $b;
$b = $a;
$a = $c;
$c = $temp;

//affiche les valeurs 
echo "Debut";
echo "\n";

echo $a;
echo "\n";

echo $b;
echo "\n";

echo $c;
echo "\n";

echo "Fin";

?>