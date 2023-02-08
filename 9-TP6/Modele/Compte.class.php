<?php
include_once "../Modele/Client.class.php";

Class Compte {
    private Client $client;
    private float $solde=0;
    private static $id;

    public function __construct($cin, $nom, $prenom, $tel )
    {
        $this -> client = new Client ($cin, $nom, $prenom, $tel);
        $this :: $id++;    
    }

    public function afficher()
    {
       echo "Détails du compte : \n***********************************\n" ; 
       echo "Numéro de compte : ". $this -> getId() ."\n"; 
       echo "Solde de compte : " . $this -> getSolde() ."\n";
       echo "Propriétaire du compte : \n" ;
       $this -> getClient() -> afficher() ; 
       echo "\n***********************************" ; 
    }

    public function crediter() {
        $this -> 

    }















    /**
     * Get the value of client
     */ 
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set the value of client
     *
     * @return  self
     */ 
    public function setClient($client)
    {
        $this->client = $client;

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

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this ::$id;
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


?>