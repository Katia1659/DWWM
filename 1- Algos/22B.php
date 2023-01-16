<?php
/* Modifiez ensuite l'algorithme pour que le programme affiche de surcroit en quelle position avait été saisie ce nombre

*/

$ipg=1;
$pg=0;
for ($i = 1; $i <= 5; $i++) {
    $n = readline ('Entrez un nombre :');
  if ($n > $pg)
  $pg=$n;
  $ipg=$i;
}

echo "Le plus grand nombre est :" . $pg;
echo "la position est :" . $ipg;