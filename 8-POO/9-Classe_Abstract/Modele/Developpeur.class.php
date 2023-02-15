<?php
require_once 'Personne.class.php';
class Developpeur extends Personne
{
    //initialisation des attributs
    private string $_specialite;

    //construct
    public function __construct(string $nom, string $prenom, string $mail, string $tel, string $specialite)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->mail = $mail;
        $this->tel = $tel;
        $this->_specialite = $specialite;
    }

    //Method qui calcul le salaire
    public function calculerSalaire(): float
    {
        $this->salaire *= 1.20;
        return $this->salaire;
    }

    //Methode afficher
    public function afficher(): string
    {
        $salaire = $this->calculerSalaire();
        $specialite = $this->_specialite;
        $nom = $this->nom;
        $prenom = $this->prenom;
        return "Le salaire du developpeur $nom $prenom ".
        "est : $salaire, sa specialité : $specialite. \n ";

    }

    /**
     * @return string
     */
    public function getSpecialite(): string
    {
        return $this->_specialite;
    }

    /**
     * @param string $specialite
     */
    public function setSpecialite(string $specialite): void
    {
        $this->_specialite = $specialite;
    }



}
