<?php

use Cassandra\Date;

class Employe
{
    //Initialisation des attribut
    private int $matricule;
    private string $nom;
    private string $prenom;
    private string $dateNaissance;
    private string $dateEmbauche;
    private float $salaire;


    //Construct

    public function __construct(int $matricule,string $nom,string $prenom,string $dateNaissance,string $dateEmbauche,float $salaire){
        $this->matricule = $matricule;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->dateEmbauche = $dateEmbauche;
        $this->salaire = $salaire;
    }

    //Method qui retournera l'age de l'employee.
    public function age():int
    {
        $date = DateTime::createFromFormat('d/m/Y',$this->dateNaissance);
        $now = new DateTime(date('d-m-Y'));
        return $date->diff($now)->y;
    }

    //Method qui retournera l'anciennete de l'employee.
    public function anciennete(): int
    {
        $date = DateTime::createFromFormat('d/m/Y',$this->dateEmbauche);
        $now = new DateTime(date('d-m-Y'));
        return $date->diff($now)->y;
    }
    //Method qui augmentera le salaire suivant l'ancienneté.
    public function augmentationDuSalaire(): void
    {
        $anciennete = $this->anciennete();
        if($anciennete < 5){
            $this->salaire *= 1.02;
            echo "Votre salaire a été augmenté de 2% \n";
        }elseif($anciennete < 10){
            $this->salaire *= 1.05;
            echo "Votre salaire a été augmenté de 5% \n";
        }else{
            $this->salaire *= 1.10;
            echo "Votre salaire a été augmenté de 10% \n";
        }
    }

    //Affichage
    public  function afficherEmploye(): void
    {
        $matricule = $this->matricule;
        $nom = $this->nom;
        $prenom = $this->prenom;
        $age = $this->age();
        $anciennete = $this->anciennete();
        $salaire = $this->salaire;
        $nom = strtoupper($nom);
        $prenom = ucfirst($prenom);
        echo " ————————————————————————————————\n";
        echo "│     Matricule : $matricule \n";
        echo "│     Nom complet : $nom $prenom\n";
        echo "│     Age : $age \n";
        echo "│     Ancienneté : $anciennete \n";
        echo "│     Salaire : $salaire \n";
        echo " ————————————————————————————————\n";
    }
    /**
     * @return int
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * @param int $matricule
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * @param mixed $dateNaissance
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
    }

    /**
     * @return mixed
     */
    public function getDateEmbauche()
    {
        return $this->dateEmbauche;
    }

    /**
     * @param mixed $dateEmbauche
     */
    public function setDateEmbauche($dateEmbauche)
    {
        $this->dateEmbauche = $dateEmbauche;
    }

    /**
     * @return mixed
     */
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * @param mixed $salaire
     */
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;
    }


}