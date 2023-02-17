<?php
include_once "../Model/Manager.class.php";
include_once "../Model/Developpeur.class.php";



$nbrM = readline("╔╗ ► Combien de Manager y-a-t-il : ");
$nbrD = readline("╚╝ ► Combien de Developpeur y-a-t-il : ");


for ($i=1; $i <=$nbrM ; $i++) { 
    $temp = "Manager_$i";
    echo "╔╗\n";
    $nom = readline("║║ ► Donnez votre Nom : ");
    $prenom = readline("║║ ► Donnez votre Prénom : ");
    $mail = readline("║║ ► Donnez votre E-mail : ");
    $tel = readline("║║ ► Donnez votre Téléphone : ");
    $salaire = readline("║║ ► Donnez votre Salaire : ");
    $service = readline("║║ ► Donnez le nom de votre Service : ");
    echo "╚╝\n";
    $$temp = new Manager($nom,$prenom,$mail,$tel,$salaire,$service);
}
for ($i=1; $i <=$nbrD ; $i++) { 
    $temp = "Dev_$i";
    echo "╔╗\n";
    $nom = readline("║║ ► Donnez votre Nom : ");
    $prenom = readline("║║ ► Donnez votre Prénom : ");
    $mail = readline("║║ ► Donnez votre E-mail : ");
    $tel = readline("║║ ► Donnez votre Téléphone : ");
    $salaire = readline("║║ ► Donnez votre Salaire : ");
    $specialite = readline("║║ ► Donnez le nom de votre Spécialité : ");
    echo "╚╝\n";
    $$temp = new Dev($nom,$prenom,$mail,$tel,$salaire,$specialite);
}

for ($i=1; $i <=$nbrM ; $i++) { 
    $temp = "Manager_$i";
    $affiche = $$temp->afficher();
    echo $affiche;
}
for ($i=1; $i <=$nbrD ; $i++) { 
    $temp = "Dev_$i";
    $affiche = $$temp->afficher();
    echo $affiche;
}




?>