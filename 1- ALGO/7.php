<?php
/*On dispose de trois variables A, B et C. Ecrivez un algorithme
transférant à B la valeur de A, à C la valeur de B et à A la
valeur de C.

Pour ce faire on crée une valeur temporaire ou "tampon" :

a = 1
b = 2
c = 3
tempo = b
b = a
a = c
c = tempo
*/
$a = 1;
$b = 2;
$c = 3;
$tempo = $b;
$b = $a;
$a = $c;
$c = $tempo;

echo 'Début';
echo"\n";
echo 'a = ',$a ;
echo"\n";
echo 'b= ',$b ;
echo"\n";
echo 'c = ',$c ;
echo"\n";
echo 'Fin';


?>