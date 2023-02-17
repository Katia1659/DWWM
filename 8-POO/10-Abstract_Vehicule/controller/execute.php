<?php
include_once "../modele/Vehicule.php";
include_once "../modele/Voiture.php";
include_once "../modele/Camion.php";
/**
 * Déclaration des Variables tableaux (Liste voitures, Liste Camions)
 */
$array_voiture=array();
$array_camion=array();

/**
 * Menu du Programme :
 */
do {
    echo "---------Menu Parck:\t
      1- Ajouter voiture\t
      2-Ajouter un Camion\t
      3-Afficher Parck vehicule\t
      4-Démmarer/ Accélerer une voiture\t
      5-Démmarer/ Accélerer un Camion\t
      6-Quitter\n";


    $rep = readline("Entrer le numéro de votre choix :");

    switch ($rep) {
        case 1:
            $anser = "o";
            do {
                echo "*******Ajout une nouvelle Voiture:\n";
                // Initiation des nouveaux Objets Voiture et les Pusher Dans Le tableau Voitures :
                array_push($array_voiture,
                    new Voiture(
                        $annee = readline("Entrer l'année de la voiture: "),
                        $modele = readline("Entrer le modele: "),
                        $prix = readline("Enter le prix :")
                    ));
                echo PHP_EOL;
                //affichage des ! Nombres Voiture ajouter
                Echo Voiture::$count." Voitures Ajouter !\n";
                echo PHP_EOL;
                $anser = readline("ajouter encors? (o/n)");

            } while ($anser == "o");
            break;

        case 2:
            $anser = "o";
            do {
                echo "*******Ajout un nouveau Camion:\n";
                // Initiation des nouveaux Objets Camion et les Pusher Dans Le tableau Camions :
                array_push($array_camion,
                    new Camion(
                        $annee = readline("Entrer l'année du camion: "),
                        $modele = readline("Entrer le modele: "),
                        $prix = readline("Enter le prix :")
                    ));
                echo PHP_EOL;
                //affichage des ! nombres Camion ajouter
                Echo Camion::$count." Camions Ajouter !\n";
                echo PHP_EOL;
                $anser = readline("ajouter encors? (o/n)");

            } while ($anser == "o");
            break;
        case 3:
            // Merger les deux tableaux (voitures, camions) :
            $parck_vehicule = array_merge($array_camion, $array_voiture);
            // Foreach pour afficher tt le park voitures :
            echo "PARCK-VEHICULES----------------------------------------\n";
            foreach ($parck_vehicule as $index => $item)
            {
                echo $item ;
                echo PHP_EOL;
            }
            echo "\n-----------------------------------------------------\n";
            break;
        case 4:
            // Démarer et Accelerer une voiture par son ID
            $id = readline("Entrer le Numéro du voiture: ");
            foreach ($array_voiture as $index => $item)
            {
                if ($item->getId() == $id)
                {
                    $item->demarrer();
                    echo PHP_EOL;
                    $item->accelerer();
                    echo PHP_EOL;

                    // si la voiture est trouvée on sort du cas !!
                    break 2;
                 }
            }
            // si non en affiche le message !
            Echo "Voiture inexistante !\n";
            break;
        case 5:
            // Démarer et Accelerer un Camion par son ID
            $id = readline("Entrer le Numéro du Camion: ");
            foreach ($array_camion as $index => $item)
            {
                if ($item->getId() == $id)
                {
                    $item->demarrer();
                    echo PHP_EOL;
                    $item->accelerer();
                    echo PHP_EOL;
                    // si le camion est trouvé on sort du cas !!
                    break 2;
                }
            }
            // si non en affiche le message !
            Echo "Camion inexistant !\n";
            break;

        case 6:
            // Message de sortie du Programme :
            echo "A bientôt!";
            break;
    }
}
while ($rep!=6);



