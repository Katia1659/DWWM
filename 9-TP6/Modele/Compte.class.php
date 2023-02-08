<?php

include_once '../Modele/Client.class.php';

Class Compte {
    private Client $proprietaire;
    private int $solde = 0;
    private static $code;



    public function __construct($cin, $nom, $prenom, $tel)
    {
        $this->proprietaire = new Client($cin, $nom, $prenom, $tel);
        $this::$code++;
        }

    public function crediter($somme) : void {
        $this->solde += $somme;
        
    }

    public function crediterCpt($somme, Compte $compteADebiter) {
        $compteADebiter = 


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
     * Get the value of proprietaire
     */ 
    public function getProprietaire()
    {
        return $this->proprietaire;
    }

    /**
     * Set the value of proprietaire
     *
     * @return  self
     */ 
    public function setProprietaire($proprietaire)
    {
        $this->proprietaire = $proprietaire;

        return $this;
    }
}