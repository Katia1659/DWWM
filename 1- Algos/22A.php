<?php
/*ecrire un algorithme qui demande successivement 20 nombres à l'utilisateur, et qui lui dit ensuite quel était le plus grans parmis ces 20 nombres"

plus grand =0
pour  i allant de 1 a 20
lire n
si n>plus grand alors
n=plus grand*/




$pg=0;
for ($i = 1; $i <= 20; $i++) {
    $n = readline ('Entrez un nombre :');
  if ($n > $pg)
  $pg=$n;
}

echo "Le plus grand nombre est :" . $pg;

