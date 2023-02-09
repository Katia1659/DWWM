<?php

include "Client.class.php";

class Compte
{
    // Variable de Classe:
    private $numCompte;
    private $solde;
    private $proprietaire;
    public static $my_compteur;

    /**
     * Constructeur Compte
     */
    public function __construct($cin, $nom, $prenom, $telNum)
    {

        $this->proprietaire = new Client($cin, $nom, $prenom, $telNum);
        $this->solde = 0;
        self::$my_compteur++;
        $this->numCompte = self::$my_compteur;
    }


    /**
     * Une méthode permettant de crediter() le compte.
     *  prenant une somme en paramètre.
     * @return void
     */
    public function crediter(float $somme): void
    {
         $this->solde= $this->solde + $somme;
       
    }

/**
     * Une méthode permettant de debiter() le compte, 
     * prenant une somme en paramètre.
     *  @return void
     */
    public function debiter(float $somme): void
    {
        $this->solde  = $this->solde - $somme;
       
    }

    /**
     * Une méthode permettant de crediterCpt() le compte,
     *  prenant une somme et un compte en paramètres,
     * créditant le compte et débitant le compte passé en paramètres.
     * @return void
     */
    public function crediterCpt(Compte $compte,float $somme): void
    {
        $this->crediter($somme);
        $compte->debiter($somme);
      
    }

    
    /**
     * Une méthode permettant de débiterCpt() le compte,
     * prenant une somme et un compte bancaire en paramètres,
     * débitant le compte et créditant le compte passé en paramètres
     * @return void
     */

    public function debiterCpt(Compte $compte,float $somme): void
    {
        $this->debiter($somme);
        $compte->crediter($somme);

    }
    /**	
     * Une méthode qui permet d’afficher le nombre des comptes crées.
     * 
     * @return int
     */

    public function compteurComptes(): int
    {
        return self::$my_compteur;
    }

    /**
     * Une méthode qui permet d’afficher le résumé d’un compte.
     * @return void
     */

    public function afficher(): void
    {
        $prop = $this->proprietaire;
        echo "************************\t
       Détail de compte:\t
       ----------------\t
       Numéro de Compte: $this->numCompte\t
       Solde de Compte: $this->solde\n";
        $prop->afficher();
        echo "***********************\n";
    }







    /**
     * Get the value of numCompte
     */
    public function getNumCompte()
    {
        return $this->numCompte;
    }

    /**
     * Set the value of numCompte
     *
     * @return  self
     */
    public function setNumCompte($numCompte)
    {
        $this->numCompte = $numCompte;

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
