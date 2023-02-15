<?php
include "../Model/Etudiant.class.php";


for ($i=1; $i <=3 ; $i++) { 
    $temp = "Code_$i";
    $temp2 = "Filiere_$i";
    $$temp = readline("Donnez la filière : ");
    $$temp2 = new Filiere($$temp);
}

for ($i=1; $i<=5 ; $i++) { 
    $random = random_int(1,3);
    $filiere = "Filiere_$random";
    $tempo = "Etudiant_$i";
    $nom = readline("Donnez votre Nom : ");
    $prenom = readline("Donnez votre Prenom : ");
    $dateNaiss = readline("Donnez votre Date de Naissance : ");
    $$tempo = new Etudiant($nom,$prenom,$dateNaiss,$$filiere->getLibelle());
}
echo "La liste des filières de notre école :\n";
for ($i=1; $i <=3 ; $i++) { 
    $temp2 = "Filiere_$i";
    echo $$temp2."\n";
}

echo "\n";
for ($i=1; $i <=3 ; $i++) { 
    $temp2 = "Filiere_$i";
    echo $$temp2."\n";
    for ($j=1; $j <=5 ; $j++){
        $filiere = "Filiere_$i";
        $lib = $$filiere->getLibelle();
        $etu = "Etudiant_$j";
        $libEtu = $$etu->getFiliere()->getLibelle();
        if ($libEtu==$lib) {
            echo $$etu."\n"; 
        }           
    }  
    
}


?>