<?php
/**Les habitants de paris paient l'impot selon les règles suivantes: 
 * les hommes de plus de 20 ans paient l'impot
 * les femmes paient l'impot si elles ont entre 18 et 35 ans 
 * les autres ne paient pas d'impot 
 ** le programme demandera donc l'age et le sexe du parisien, et se pronenecera donc ensuite sur le fait que l'habitant est imposable.
  */
echo 'Début: ';
echo "\n";

// Declaration de variable "entrer urtilisateur: 
  $sex= readline('Quel est votre sexe (M=MAsculin/F=Féminin)>> ');
  echo "\n";
  $age=readline('Entrez votre age >> ');

// condition if -elsif -else :
  if ($sex =='M' and $age>= 20) {
    echo "\n";
    print 'Vous êtes Imposable';
  }
  elseif ($sex=='F' and $age>=18 and $age<=35) {
    echo "\n";
    print 'Vous êtes Imposable';
  }
  else{
    echo "\n";
    print "Vous n'êtes pas imposable";
  }
echo "\n";
echo "Fin";
?>