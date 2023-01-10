<?php 
//Ecrire un algo qui declare un tableau de 9 notes 


$tab = array();

    //Remplissage tableau
    for ($i=0; $i < 8; $i++) { 
        $tab[$i]= /*array (*/ readline ('Note ?')/*)*/; 
    }

    //Affichage tableau
   for ($i=0; $i < 8; $i++) {
    echo $tab[$i]." | ";

   }
  

?>