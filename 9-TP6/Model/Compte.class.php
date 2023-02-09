<?php
include_once "../Model/Client.class.php";
// Creation de la classe compte avec attributs est methodes qui repondent aux demandes
class Compte{
    private static $code;
    private $proprietaire;
    private $solde = 0;
    private $numCompte;

    public function __construct($cin,$nom,$prenom,$tel){
        $this->incrementation();
        $this->numCompte = $this::$code;
        $this->proprietaire = new Client($cin,$nom,$prenom,$tel);
    }

    public function incrementation(){
        $this::$code++;
    }

    public function affichage(){
        $cin = $this->proprietaire->getCin();
        $nom = $this->proprietaire->getNom();
        $prenom = $this->proprietaire->getPrenom();
        $tel = $this->proprietaire->getTel();
        $solde = $this->getSolde();
        $numCompte = $this->getNumCompte();
        echo "\n\nNuméro de compte : $numCompte\nSolde du compte : $solde\nPropriétaire du compte : \nCIN : $cin \nNom : $nom \nPrénom : $prenom\nTél : $tel\n";
    }

    public function numCompte(){
        $code = $this->getCode();
        echo "Compte $code\n";
    }

    public function crediter($solde){
        $this->solde +=$solde;
    }

    public function debiter($solde){
        $this->solde -=$solde;
    }

    public function crediterCpt($somme,$compte){
        $solde = $this->getSolde();
        $newSolde = $solde - $somme;
        $this->solde = $newSolde;
        $compte->solde = $compte->getSolde()+$somme;
        echo "Opération bien effectué\n";
    }

    public function debiterCpt($somme,$compte){
        $solde = $this->getSolde();
        $newSolde = $solde + $somme;
        $this->solde = $newSolde;
        $compte->solde = $compte->getSolde()-$somme;
        echo "Opération bien effectué\n";
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

    /**
     * Get the value of proprietaire
     */
    public function getproprietaire()
    {
        return $this->proprietaire;
    }

    /**
     * Set the value of proprietaire
     *
     * @return  self
     */
    public function setproprietaire($proprietaire)
    {
        $this->proprietaire = $proprietaire;

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
}