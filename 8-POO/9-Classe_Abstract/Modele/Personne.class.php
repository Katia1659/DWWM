<?php

abstract class Personne
{
    //Initalisation attribut
    public  static $counter;
    protected int $id;
    protected string $nom;
    protected string $prenom;
    protected string $mail;
    protected string $tel;
    protected float $salaire = 1200;


    //Method abstract calculer salaire
    abstract protected function calculerSalaire(): float;


    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
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



}
