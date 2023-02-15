<?php
require_once 'Personne.class.php';
class Manager extends Personne
{
    //Initalisation des attribut
    private string $_service;

    //Construct
    public function __construct(string $nom, string $prenom, string $mail, string $tel, string $service){
        $this->_service = $service;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->mail = $mail;
        $this->tel = $tel;
    }
    //Method qui calcul le salaire
    public function calculerSalaire(): float
    {
        $this->salaire *= 1.35;
        return $this->salaire;
    }

    //Methode afficher
    public function afficher(): void
    {
        $salaire = $this->calculerSalaire();
        $service = $this->_service;
        $nom = $this->nom;
        $prenom = $this->prenom;
        echo "Le salaire du manager $nom $prenom";
        echo "est : $salaire, son service : $service. \n ";

    }

    /**
     * @return string
     */
    public function getService(): string
    {
        return $this->_service;
    }

    /**
     * @param string $service
     */
    public function setService(string $service): void
    {
        $this->_service = $service;
    }


}
