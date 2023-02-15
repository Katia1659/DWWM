<?php
//création de la class personne 
class Personne{
    protected static $id;
    protected string $nom;
    protected string $prenom;
    protected string $mail;
    protected int $tel;
    protected float $salaire;
//initialisation du constructeur de la class 
    public function __construct($nom,$prenom,$mail,$tel,$salaire){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->mail = $mail;
        $this->tel = $tel;
        $this->salaire = $salaire;        
    }
    //création de la méthode salaire 

    public function salaire(){
        return $this->salaire;
    }
    //création de la méthode affiche permettant l'affichage 
    public function affiche(){
        $nom = $this->nom;
        $prenom = $this->prenom;
        $mail = $this->mail;
        $tel = $this->tel;
        echo "╠╬╣ Nom ► $nom\n╠╬╣ Prénom ► $prenom\n╠╬╣ E-mail ► $mail\n╠╬╣ Téléphone ► $tel\n";
    }
//Tous les getter & setter
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
     * Get the value of mail
     */ 
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set the value of mail
     *
     * @return  self
     */ 
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get the value of tel
     */ 
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set the value of tel
     *
     * @return  self
     */ 
    public function setTel($tel)
    {
        $this->tel = $tel;

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