<?php

/*Cration de la class mere Personne*/
class Personne{
    protected  int $id;
    protected string $nom;
    protected string $prenom;
    protected string $mail;
    protected string $tel;
    protected float $salaire;
    private static  int $comp = 0;
    
    public function __construct($nom,$prenom,$mail,$tel,$salaire)
    {
        $this->id = self::$comp;
        $this->nom =$nom;
        $this->prenom = $prenom;
        $this->mail = $mail;
        $this->tel =$tel;
        $this->salaire = $salaire;

    }
    

    /*Methode d'affichage basique de la class mere*/
    public function afficher() : void{
        $salaire = $this->calculSalaire();
        echo "- Nom : $this->nom \n- Prenom : $this->prenom \n- Mail : $this->mail \n- Téléphone : $this->tel \n- Salaire : $salaire €\n";
    }

    /**
     * @return int
     */
    public static function getId(): int
    {
        return self::$id;
    }

    /**
     * @param int $id
     */
    public static function setId(int $id): void
    {
        self::$id = $id;
    }


    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom(string $prenom): void
    {
        $this->prenom = $prenom;
    }

    /**
     * @return string
     */
    public function getMail(): string
    {
        return $this->mail;
    }

    /**
     * @param string $mail
     */
    public function setMail(string $mail): void
    {
        $this->mail = $mail;
    }

    /**
     * @return string
     */
    public function getTel(): string
    {
        return $this->tel;
    }

    /**
     * @param string $tel
     */
    public function setTel(string $tel): void
    {
        $this->tel = $tel;
    }

    /**
     * @return float
     */
    public function getSalaire(): float
    {
        return $this->salaire;
    }

    /**
     * @param float $salaire
     */
    public function setSalaire(float $salaire): void
    {
        $this->salaire = $salaire;
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
}