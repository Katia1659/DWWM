<?php
/*ecrire l'algorithme permettant d'imprimer le triangle suivant, le nombre de lignes étant donné pas l'utilisateur 
1
12
123
1234
12345
123456
1234567
 
pour i allant de 1 a 10
    pour j allant de j a i
*/
//boucle 
for($i = 0;$i <= 10;$i++){  
    for($j = 1;$j <= $i;$j++){  
    echo $j;  
    }  
    echo PHP_EOL;  
    }  
?>  