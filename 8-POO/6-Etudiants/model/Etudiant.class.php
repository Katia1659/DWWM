<?php
include('Filiere.class.php');
//on defini la classe Etudiant
class Etudiant
{
    private static $codeId = 0;
    
    //on defini les attibuts
    private int $id;
    private string $nom;
    private string $prenom;
    private string $dateNaiss;
    private Filiere $filiere;

    //on defini un constructeur 
    public function __construct(string $nom,string $prenom,string $dateNaiss,string $code,string $libelle)
    {
        self::$codeId++;
        $this->id = self::$codeId;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaiss = $dateNaiss;
        $this->filiere = new Filiere($code,$libelle);
    }

    public function __toString():string{
        return "Je suis l'etudiant $this->nom $this->prenom ma date de naissance est : $this->dateNaiss".PHP_EOL;   
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

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
     * Get the value of filiere
     */ 
    public function getFiliere()
    {
        return $this->filiere;
    }

    /**
     * Set the value of filiere
     *
     * @return  self
     */ 
    public function setFiliere($filiere)
    {
        $this->filiere = $filiere;

        return $this;
    }
}
?>