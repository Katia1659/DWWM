<?php
/* On dispose de trois variable A, B et C. Ecrivez un algorithme transférent à B la valeur de A, à C la valeur de B et à A la valeur de C.  

$a = 2;
$b = 4;
$c = 6;

echo 'Début';
echo $a;
echo "\n";
echo $b;
echo "\n";
echo $c;
echo "\n";

$temp = $c ; 
$c = $b ;
$b = $a ;
$a = $temp ;

echo 'Début';
echo $a;
echo "\n";
echo $b;
echo "\n";
echo $c;
echo "\n";
*/
$a = 2;
$b = 4;
$c = 6;
echo 'Début';
echo "\n";
echo $a;
echo "\n";
echo $b;
echo "\n";
echo $c;
echo "\n";
echo 'Fin';
echo "\n";

$temp = $c ; 
$c = $b ;
$b = $a ;
$a = $temp ;

echo $a;
echo "\n";
echo $b;
echo "\n";
echo $c;
echo "\n";
?>