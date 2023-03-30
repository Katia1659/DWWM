<?php
/* On dispose de trois variables a, b, c. Ecrivez un algorithme transférant à b la valeur de a, à c la valeur de b et à a la valeur de c 
Var a, b ,c et temp : Entier
    début 
        a = 3; 
        b = 6;
        c = 2; 
        temp = b; 
        b = a; 
        a = c; 
        c = temp;
    fin

$a = 3; 
$b = 6;
$c = 2; 
$temp = b;
$b = $a;
$a = $c;
$c = $temp;

echo $a;
echo "\n";

echo $b;
echo "\n";

echo $c;
echo "\c";
*/

$a = 3; 
$b = 6;
$c = 2; 
$temp = $b;
$b = $a;
$a = $c;
$c = $temp;

echo $a;
echo "\n";

echo $b;
echo "\n";

echo $c;
echo "\n";

?>