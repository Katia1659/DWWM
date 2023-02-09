<?php
"../modele/Client.class.php"; 

//creation de la class compte
Class Compte{
    private Client $client;
    private $solde=0;
    private static $code=0;
    private $numeroCompte;

    //creation de la method construct
    public function __construct($cin, $nom, $prenom, $tel){
        $this::$code++;
        $this->client = new Client($cin, $nom, $prenom, $tel);
        $this->numeroCompte=$this::$code;
    }

    //creation de la method crediter
    public function crediter($somme){
        
        $encienSolde = $this -> getSolde();
        $this -> solde = $encienSolde + $somme;
    }
    //creation de la method pour crediter un autre compte
    public function crediterCpt($somme , Compte $client){
        $this -> solde = $this -> solde + $somme ;
       
        $ancienSoldeDeux = $client->getSolde();

        $client -> solde = $ancienSoldeDeux - $somme;
    }
    //creation de la method debiter
    public function debiter($somme){
        
        $encienSolde = $this -> getSolde();
        $this -> solde = $encienSolde- $somme;
    }
    //creation de la method debiter un autre compte
    public function debiterCpt($somme , Compte $client){
        $encienSolde = $this -> solde;
        $this -> solde = $encienSolde-$somme;
        $encienSoldeDeux = $client->getSolde();
        $client -> solde = $encienSoldeDeux + $somme;
        
    }
    //creation de la mathod pour afficher
    public function afficherResume(){
        echo "\nNumero de compte : " .$this ->getNumeroCompte()."\n";
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
     * Get the value of numeroCompte
     */ 
    public function getNumeroCompte()
    {
        return $this->numeroCompte;
    }

    /**
     * Set the value of numeroCompte
     *
     * @return  self
     */ 
    public function setNumeroCompte($numeroCompte)
    {
        $this->numeroCompte = $numeroCompte;

        return $this;
    }
}
?>