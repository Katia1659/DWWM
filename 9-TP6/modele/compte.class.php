<?php

class Compte {
    private Client $_client;
    private float $solde = 0;
    private static $code = 0;


    public function __construct($cin,$nom,$prenom,$tel)
    {
        $this->_client = new Client($cin,$nom,$prenom,$tel);
        $this:: $code++;
    }


    public function afficheNbCompte(){
        $compte = $this-> getCode();
        echo "le nombre de compte crées est : $compte";
    }

    public function crediter($somme){
        $this->solde += $somme;
        echo "votre compte à ete crediter";

    }

    public function crediterCpt($somme,Compte $compte){

        $this->solde += $somme;
        $compte -> solde -= $somme;
        echo "votre compte à ete crediter";
    }

    public function debiter($somme){
        $this->solde -= $somme;
        return "votre compte à ete debiter";

    }

    public function debiterCpt($somme,Compte $compte){
        $this->solde -= $somme;
        $compte -> solde += $somme;
        echo "votre compte à ete debiter";
    }

    public function afficher():void{
        $compte = $this::$code;
        $solde = $this->solde;
        echo "\n ************************************ \n";
        echo "Numéro compte : $compte \n Solde du compte : $solde \n Propritaire du compte : \n";
        $this->get_client()->afficher();
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
     * Get the value of _client
     */ 
    public function get_client()
    {
        return $this->_client;
    }

    /**
     * Set the value of _client
     *
     * @return  self
     */ 
    public function set_client($_client)
    {
        $this->_client = $_client;

        return $this;
    }
}



?>