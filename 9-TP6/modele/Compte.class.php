<?php
"../modele/Client.class.php";
Class Compte{
    private Client $client;
    private $solde=0;
    private static $code;

    public function __construct($cin, $nom, $prenom, $tel){
        $this->client = new Client($cin, $nom, $prenom, $tel);
        $this::$code++;
    }

    public function crediter($somme){
        $this -> solde =+ $somme;
    }
    public function crediterCpt(){

    }
    public function debiter(){

    }
    public function debiterCpt(){

    }
    public function afficherResume(){
        echo "\nNumero de compte : " .$this ->getCode()."\n";
        echo "Solde de compte : " .$this ->getSolde()."\n";
        echo "propietaire du compte\n";
        $this->getClient()->afficher(); 
    

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
     * Get the value of code
     */ 
    public function getCode()
    {
        return $this::$code;
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
}
?>