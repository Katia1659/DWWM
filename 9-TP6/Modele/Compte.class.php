<?php
include_once "../Modele/Client.class.php";

Class Compte {
    private Client $possesseur;
    private static $id;
    private int $code;
    private float $solde=0;

    // Initialisation des attributs.
    public function __construct(Client $client)
    {
        $this -> possesseur = $client;
        self :: $id++;    
        $this -> code = self :: $id;
    }


    // Création de la méthode d'affichage
    public function afficher()
    {
       echo "Détails du compte : \n***********************************\n" ; 
       echo "Numéro de compte : ". $this -> getCode() ."\n"; 
       echo "Solde de compte : " . $this -> getSolde() ."\n";
       echo "Propriétaire du compte : \n" ;
       $this -> getPossesseur() -> afficherCompte() ; 
       echo "\n***********************************" ; 
    }

    // Création de la méthode de calcul
    public function crediter($newSolde) {
        $this -> solde = $this -> solde + $newSolde;
        echo "Opération bien effectué \n";
    }

    // Création de la méthode de calcul
    public function crediterCpt (Compte $possesseur, $newSolde) {
        $this -> solde = $this -> solde + $newSolde;
        $soldeCpt = $possesseur -> getSolde();
        $soldeMaj = $soldeCpt - $newSolde;
        $possesseur = $possesseur -> setSolde($soldeMaj);
        echo "Opération bien effectué \n";

    }

    // Création de la méthode de calcul
    public function debiterCpt (Compte $possesseur, $newSolde) {
        $this -> solde = $this -> solde - $newSolde;
        $soldeCpt = $possesseur -> getSolde();
        $soldeMaj = $soldeCpt + $newSolde;
        $possesseur = $possesseur -> setSolde($soldeMaj);
        echo "Opération bien effectué \n";

    }

    // Création de la méthode de calcul
    public function debiter ($soldeDbt) {
        $this -> solde = $this -> solde - $soldeDbt;
        echo "Opération bien effectué \n";
    }

// Création de la méthode d'affichage
    public function resume (){
        $this -> afficher() ;
    }

    // Création de la méthode d'affichage
    public static function nbCompte(){
        echo "Le nombre de comptes crées est : ". self :: $id ;

    }









    


    /**
     * Get the value of posesseur
     */ 
    public function getPossesseur()
    {
        return $this->possesseur;
    }

    /**
     * Set the value of posesseur
     *
     * @return  self
     */ 
    public function setPossesseur($possesseur)
    {
        $this->possesseur = $possesseur;

        return $this;
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
     * Get the value of code
     */ 
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the value of code
     *
     * @return  self
     */ 
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get the value of solde
     */ 
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * Set the value of solde
     *
     * @return  self
     */ 
    public function setSolde($solde)
    {
        $this->solde = $solde;

        return $this;
    }
}


?>