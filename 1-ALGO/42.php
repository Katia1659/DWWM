<?php
/** algorithme qui tie le tableau */
echo "Début \n";

// déclaration du tableau :
$tab=array(14,3,9,2,5);


for ($i=0; $i < sizeof($tab) ; $i++) { 
    echo "$tab[$i]"."|";
}

echo "\n Tri par ordre croissant :\n";
// boucle de tri par sélection :
for ($i=0; $i < sizeof($tab)  ; $i++) { 
    for ($j=0; $j < sizeof($tab) ; $j++) { 

        if($tab[$i]<$tab[$j]){
        $temp=$tab[$i];
        $tab[$i]=$tab[$j];
        $tab[$j]=$temp;
        }
       
    }
   
}

for ($i=0; $i < sizeof($tab) ; $i++) { 
    echo "$tab[$i]"."|";
}

echo "\n Fin";
?>