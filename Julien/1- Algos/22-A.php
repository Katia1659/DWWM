<?php
/* Ecrire un algorithme qui demande successivement 20 nombres à 
l'utilisateur, et qui lui dit ensuite quel étai le plus grand parmi ces 20 nombres.
  */
  $i = 1;
  $nb = readline ("$i)Entrez un nombre : ");
  $nbBigger = $nb;
  $i ++;
  for ($nb; $i <= 20 ; $i ++) {
      $nb = readline ("$i)Entrez un nombre : ");
      if ($nb > $nbBigger) {
          $nbBigger = $nb;
      }
  }
      echo "Votre nombre le plus élevé est le $nbBigger";
  ?>