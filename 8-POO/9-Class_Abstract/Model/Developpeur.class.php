<?php
include_once "../Model/Personne.class.php";
//Création de class Dev parenté a la class Personne
class Dev extends Personne{
    //initialisation de l'attribut de la class 
    private string $specialite;
//initialisation du constructeur
    public function __construct(string $nom,string $prenom,string $mail,int $tel,float $salaire, string $specialite){
        parent::__construct($nom, $prenom, $mail, $tel, $salaire);
        $this->specialite = $specialite;
        }
        //methode permettant l'affichage de la class
    public function afficher(){
        $specialite = $this->specialite;
        $nom = $this->nom;
        $prenom = $this->prenom;
        $mail = $this->mail;
        $tel = $this->tel;
        $salaire = $this->calculeSalaire();
        echo " ═► Le salaire du developpeur"." ".strtoupper($nom)." ".ucfirst($prenom)." "."est de : $salaire €, sa spécialité : ".ucfirst($specialite)."\n";
    }
    //methode permettant de calculer le salaire apres augmentation 

    public function calculeSalaire(){
        return $this->salaire*1.2;
    }
//Tous les getter & setter
    /**
     * Get the value of specialite
     */ 
    public function getSpecialite()
    {
        return $this->specialite;
    }

    /**
     * Set the value of specialite
     *
     * @return  self
     */ 
    public function setSpecialite($specialite)
    {
        $this->specialite = $specialite;

        return $this;
    }
}
?>