
<?php
/* Modifier ensuite l'algorithme pour que le programme affiche de surcroit en quelle position avait été saisie ce nombre. */
  $i = 1;
  $iBigger = 1;
  $nb = readline ("$i)Entrez un nombre : ");
  $nbBigger = $nb;
  $i ++;
  for ( $nb ; $i <= 20 ; $i ++) {
      $nb = readline ("$i)Entrez un nombre : ");
      if ($nb > $nbBigger) {
          $nbBigger = $nb;
          $iBigger = $i;
      }
  }
      echo "Votre nombre le plus élevé est le $nbBigger en $iBigger ième position";

  ?>