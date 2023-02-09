<?php

//on defini la classe employe
class Employe
{
    //on defini les attibuts
    private int $matricule;
    private string $nom;
    private string $prenom;
    private string $dateNaiss;
    private string $dateEmbauche;
    private float $salaire;

    //on defini un constructeur 
    public function __construct(int $matricule,string $nom,string $prenom,string $dateNaiss,string $dateEmbauche,float $salaire)
    {
        $this->matricule = $matricule;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaiss = $dateNaiss;
        $this->dateEmbauche = $dateEmbauche;
        $this->salaire = $salaire;
    }

    //fonction qui retourne l'age
    public function age():string{
        $dateNaiss = $this->getDateNaiss();
        $aujourdhui = date("d-m-Y");
        $diff1 = date_diff(date_create($dateNaiss), date_create($aujourdhui));
        $diff = $diff1->format('%y');
        return $diff;
    }

    //fonction qui retourne l'ancienneté
    public function anciennete():string{
        $dateEmbauche = $this->getDateEmbauche();
        $aujourdhui = date("d-m-Y");
        $diff1 = date_diff(date_create($dateEmbauche), date_create($aujourdhui));
        $diff = $diff1->format('%y');
        return $diff;
    }

    //fonction pour augmenter le salaire en fonction de l'ancienneté
    public function augmentationDuSalaire():void{

        $diff = $this->anciennete();
        if ($diff<5) {
            $this->salaire = $this->salaire * 1.02;
        }elseif ($diff<10 and $diff >=5) {
            $this->salaire = $this->salaire * 1.05;
        }elseif ($diff >=10) {
            $this->salaire = $this->salaire * 1.10;
        }

    }

    //fonction pour afficher un resumé de l'employé
    public function afficherEmploye($employe):void{
        $matricule = $this->matricule;
        $nom = strtoupper($this->nom);
        $prenom = strtolower($this->prenom);
        $prenom = ucwords($prenom);
        $age = $this->age();
        $anciennetee = $employe->anciennete();
        $salaire = $this->salaire;
        echo "► Matricule = $matricule" . PHP_EOL."► Nom complet = $nom $prenom".PHP_EOL."► Age = $age".PHP_EOL."► Anciennetée = $anciennetee".PHP_EOL."► Salaire = $salaire";
        
    }

//////////////////////////////////    GETTER & SETTER    //////////////////////////////////////

    /**
     * Get the value of matricule
     */ 
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set the value of matricule
     *
     * @return  self
     */ 
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of dateNaiss
     */ 
    public function getDateNaiss()
    {
        return $this->dateNaiss;
    }

    /**
     * Set the value of dateNaiss
     *
     * @return  self
     */ 
    public function setDateNaiss($dateNaiss)
    {
        $this->dateNaiss = $dateNaiss;

        return $this;
    }

    /**
     * Get the value of DateEmbauche
     */ 
    public function getDateEmbauche()
    {
        return $this->dateEmbauche;
    }

    /**
     * Set the value of DateEmbauche
     *
     * @return  self
     */ 
    public function setDateEmbauche($dateEmbauche)
    {
        $this->dateEmbauche = $dateEmbauche;

        return $this;
    }

    /**
     * Get the value of salaire
     */ 
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * Set the value of salaire
     *
     * @return  self
     */ 
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;

        return $this;
    }
}
?>