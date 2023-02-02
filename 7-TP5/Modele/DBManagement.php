<?php
session_start();
function insertStagiaires(array $listStag):bool{
    //Chaine de connexion à la base de donnée
    $bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    $sql = "INSERT INTO stagiaire (nom, prenom, place) VALUES (?,?,?)";
    $stmt= $bdd->prepare($sql);
    $status = $stmt->execute($listStag);
    return $status;
}


        function updatePlace ($place, $id) : bool{
            $status = false;
            $bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            $sql = "UPDATE stagiaire SET PLACE = '$place' WHERE id='$id'";
            $stmt= $bdd->prepare($sql);
            $status = $stmt->execute();
            return $status; 
           
        }

        function updateNom ($nom, $id) : bool{
            $status = false;
            $bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            $sql = "UPDATE stagiaire SET NOM ='$nom' WHERE id= '$id'"; 
            $stmt= $bdd->prepare($sql);
            $status = $stmt->execute();
            return $status;
        }

        function updatePrenom ($prenom, $id) : bool{
            $status = false;
            $bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            $sql = "UPDATE stagiaire SET PRENOM = '$prenom' WHERE id='$id'"; 
            $stmt= $bdd->prepare($sql);
            $status = $stmt->execute();
            return $status;
        }
        
        function delete (array $idTab) : bool{
            $status = false;
            $bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            foreach ($idTab as $id){
                $sql = "DELETE FROM stagiaire WHERE ID= '$id'";
                $stmt= $bdd->prepare($sql);
                $status = $stmt->execute();
            }

            return $status;
        }
       function deleteALL() : bool {
        $status = false;
        $bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        for ($i=0; $i <1 ; $i++) { 
            
            $sql = "DELETE FROM stagiaire";
            $stmt= $bdd->prepare($sql);
            $status = $stmt->execute();
        }
            $sql ="ALTER TABLE stagiaire AUTO_INCREMENT=0";
            $stmt= $bdd->prepare($sql);
            $status = $stmt->execute();
        return $status;
       }
    
?>