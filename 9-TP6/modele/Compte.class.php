<?php
include_once "Client.class.php";

class Compte{
    //on définit les attributs de la classe

    private $solde = 0;
    private static $code = 0 ;
    private $numCompte;
    private Client $_propriétaire;

    //Constructeur d'initialisation

    public function __construct($cin, $nom, $prenom, $tel){        
        self::$code++;
        $this->numCompte = self::$code;
        $this->_propriétaire = new Client($cin, $nom, $prenom, $tel);
    }

    //===================== Méthodes =====================

    

    public function crediter(float $somme): void{
        $newSolde = $this->solde + $somme;
        $this->solde = $newSolde;
    }

    public function crediterCpt(float $somme, $numCompte): void{
        $newSolde = $this->solde + $somme;
        $this->solde = $newSolde;
        //
        $cptDebite = $numCompte->solde;
        $cptDebite = $cptDebite - $somme;
        $numCompte->solde = $cptDebite;
        echo "Opération bien effectuée". PHP_EOL;
    }

    
    public function debiter(float $somme): void{
        $newSolde = $this->solde - $somme;
        $this->solde = $newSolde;
    }

    public function debiterCpt(float $somme, $numCompte): void{
        $newSolde = $this->solde - $somme;
        $this->solde = $newSolde;
        //
        $cptCredite = $numCompte->solde;
        $cptCredite = $cptCredite + $somme;
        $numCompte->solde = $cptCredite;
        echo "Opération bien effectuée". PHP_EOL;
    }
 	

    public function afficherCpt(): string{
        $resume = "****************************". PHP_EOL. "Numéro de Compte: ". $this->numCompte. PHP_EOL. "Solde de compte :". $this->solde. PHP_EOL. "Propriétaire du compte :". PHP_EOL.  $this->_propriétaire->afficher(). PHP_EOL. "****************************". PHP_EOL;
        return $resume;
    }
    
    public function afficherNombreCpt(): string{
        $afficher = PHP_EOL. "Le nombre de comptes crées: ". self::$code;
        return $afficher;
    }
  

    //===================== Méthodes d'accès =====================

    

    /**
     * Get the value of solde
     */ 
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * Get the value of code
     */ 
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Get the value of _propriétaire
     */ 
    public function get_propriétaire()
    {
        return $this->_propriétaire;
    }

    /**
     * Set the value of _propriétaire
     *
     * @return  self
     */ 
    public function set_propriétaire($_propriétaire)
    {
        $this->_propriétaire = $_propriétaire;

        return $this;
    }

    /**
     * Get the value of numCompte
     */ 
    public function getNumCompte()
    {
        return $this->numCompte;
    }
}

?>