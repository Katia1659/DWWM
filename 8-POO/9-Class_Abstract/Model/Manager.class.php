<?php
include_once "../Model/Personne.class.php";
//Création de la class manager parenté à personne
class Manager extends Personne{
    //initialisation de l'attribut de la class manager
    private string $service;
//Initilisation du constructeur de la class
    public function __construct(string $nom,string $prenom,string $mail,int $tel,float $salaire, string $service){
        parent::__construct($nom, $prenom, $mail, $tel, $salaire);
        $this->service = $service;
        }
        //Création de la méthode d'affichage de la class
    public function afficher(){
        $service = $this->service;
        $nom = $this->nom;
        $prenom = $this->prenom;
        $mail = $this->mail;
        $tel = $this->tel;
        $salaire = $this->calculeSalaire();
        echo " ═► Le salaire du manager"." ".strtoupper($nom)." ".ucfirst($prenom)." "."est de : $salaire €, son service : ".ucfirst($service)."\n";
    }
    //Méthode permettant de calculer le salaire avec une augmentation
    public function calculeSalaire(){
        return $this->salaire*1.35;
    }    
//Tous les getter & setter
    /**
     * Get the value of service
     */ 
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set the value of service
     *
     * @return  self
     */ 
    public function setService($service)
    {
        $this->service = $service;

        return $this;
    }
}


?>