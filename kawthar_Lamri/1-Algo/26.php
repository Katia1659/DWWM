<?php 
/** saisir 3 entiers a, b, c et déterminer dans R les racines de l'équation ax2 + bx +c =0. */

echo 'Début';
echo "\n";
print "pour l'équation ax^2 + bx + c= 0 ";
echo "\n";

// déclaration des variables :
echo "\n";
$a=readline('Enter la valeur de a :');
echo "\n";
$b=readline('Enter la valeur de b :');
echo "\n";
$c=readline('Enter la valeur de c :');

// Calcule du ∆ "Discréminant" ∆ = b2 − 4ac
echo "\n";
$d=($b*$b)-(4*$a*$c);


// les Conditions !!
if ($d>0) {
    // x1/x2 représentes les rations de l'équation quand $d est positif ! x1 = (−b+√∆) / 2a | ou | x2 = (−b-√∆) / 2a.
    $x1 =-($b)+(sqrt($d))/(2*$a);
    $x2 =-($b)-(sqrt($d))/(2*$a);
    // affichage
    print " le discriminant ∆= $d, l'équation admet deux solution dans R : \n
     x1= $x1 \n
     x2= $x2";
}
elseif ($d==0) {
    // x représente le rations de l'équation quand $d est nulle ! x=-b/2a
    $x=-$b/2*$a;
    // affichage
    print "le discriminant ∆= $d, l'équation admet une solution dans R : x= $x";
}
else {
    // quand $d est négatif on a pas de solution dans R !
    print "Comme ∆ = $d est négatif, il n’y a pas de solution dans R"; 
}
echo"\n";
echo'Fin';

?>