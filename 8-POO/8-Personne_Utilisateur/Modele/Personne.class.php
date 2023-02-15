<?php

class Personne
{
    //Initalisation attribut
    private static $_compteur;
    protected int $id;
    protected string $nom;
    protected string $prenom;
    protected string $mail;
    protected string $tel;
    protected float $salaire;

    //Construct
    public function __construct(string $nom, string $prenom, string $mail, string $tel, float $salaire)
    {
        $this::$_compteur++;
        $this->id = $this::$_compteur;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->mail = $mail;
        $this->tel = $tel;
        $this->salaire = $salaire;
    }

    //Method calculer le salaire
    public function calculerSalaire(): void
    {

    }
    public function afficher(): void
    {
        $nom = $this->nom;
        $prenom = $this->prenom;
        $tel = $this->tel;
        $mail = $this->mail;
        $salaire = $this->salaire;

        echo "Je suis $nom $prenom , mon mail est : $mail tel : $tel , mon salaire : $salaire ";
    }
}
