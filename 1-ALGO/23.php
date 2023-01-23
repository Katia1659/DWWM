<?php 
//Réécrire l'algo precedent, ne sais pas cb de nombres a saisir, saisie s'arrete quand utilisateur rentre 0
/*
max <- 0

for (i=1; i <= nb; i++)

if (nb > max)
max = nb
posi = i




*/ 

$max = 0;
$posi = 0;


$nb = readline ('Entrez un nombre -> ');

while ($nb != 0) {
        $nb = readline ('Entrez un nombre -> ');
$i++;
if ($nb >  $max) {
        $max = $nb;
        $posi = $i+1;
    }


}

// for ($i=1; $i <= $nb ; $i++) {
  

    
// }

echo 'Maxi = '.$max."\n";

echo 'Postion de maxi ='.$posi;

?>