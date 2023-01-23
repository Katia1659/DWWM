<?php
/*On dispose de trois varables a, b et c. Ecrivez un algorithme transférant à b la valeur de a, à c la valeur de b et à a la valeur de c.
début
a = 5           /a=5
b = 3           /a=5 b=3
c = 2           /a=5 b=3 c=2
temp = b        /a=5 b=3 c=2 temp=3
b = a           /a=5 b=5 c=2 temp=3
a = c           /a=2 b=5 c=2 temp=3
c = temp        /a=2 b=5 c=3 temp=3
fin
*/

$a = 5 ;
$b = 3 ;
$c = 2 ;
$temp = $b ;
$b = $a ;
$a = $c ;
$c = $temp ;

echo 'début';
echo "\n";

echo $a ;
echo "\n";

echo $b;
echo "\n";

echo $c;
echo "\n";

echo 'début';
?>