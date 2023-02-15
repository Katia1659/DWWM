<?php

class Personne {
    private static $codeId = 0;
    private int $id;
    protected string $nom;
    protected string $prenom;
    protected string $mail;
    protected string $tel;
    protected float $salaire;

    public function __construct($nom,$prenom,$mail,$tel,$salaire){
        self::$codeId++;
        $this->id = self::$codeId;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->tel = $tel;
        $this->mail = $mail;
        $this->salaire = $salaire;
    }

    public function calculSalaire(){
        $salaire = $this->salaire;
         
    }

    public function affiche () : void{

    }


    /**
     * Get the value of salaire
     *
     * @return float
     */
    public function getSalaire(): float
    {
        return $this->salaire;
    }

    /**
     * Set the value of salaire
     *
     * @param float $salaire
     *
     * @return self
     */
    public function setSalaire(float $salaire): self
    {
        $this->salaire = $salaire;

        return $this;
    }

    /**
     * Get the value of tel
     *
     * @return string
     */
    public function getTel(): string
    {
        return $this->tel;
    }

    /**
     * Set the value of tel
     *
     * @param string $tel
     *
     * @return self
     */
    public function setTel(string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get the value of mail
     *
     * @return string
     */
    public function getMail(): string
    {
        return $this->mail;
    }

    /**
     * Set the value of mail
     *
     * @param string $mail
     *
     * @return self
     */
    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get the value of prenom
     *
     * @return string
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @param string $prenom
     *
     * @return self
     */
    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of nom
     *
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @param string $nom
     *
     * @return self
     */
    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }
}


?>