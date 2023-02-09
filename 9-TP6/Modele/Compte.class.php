<?php

include_once '../Modele/Client.class.php';

// On initialise la classe Compte

Class Compte {
    private Client $proprietaire;
    private float $solde = 0;
    public static $compteur;
    public int $code;

// On crée la méthode construct qui initialise les attributs de l'objet

    public function __construct(string $cin, string $nom, string $prenom, string $tel)
    {
        $this->proprietaire = new Client($cin, $nom, $prenom, $tel);
        self::$compteur++;
        $this->code = self::$compteur;
        }

// On crée la méthode créditer qui permet d'ajouter de l'argent sur un compte en banque 

    public function crediter() : void {

        $somme =readline("Donner le montant à déposer: ");

        $this->solde += $somme;

        echo "Opération bien effectuée \n";

        $this->afficheResumeCompte();
        

// On crée la méthode crediterCpt qui permet d'ajouter de l'argent sur un compte, depuis un autre compte
    }

    public function crediterCpt(Compte $compte) : void {

        echo "Créditer le compte " .$this->code. " à partir du compte " .$compte->getCode()."\n";

        $somme =readline("Donner le montant à déposer: ");

        echo "Opération bien effectuée \n";

        echo "****************************** \n";

        $this->solde += $somme;

        $soldeCompte = $compte ->getSolde();

        $nouveauSolde = $soldeCompte - $somme; 

        $compte = $compte->setSolde($nouveauSolde);

    }

// On crée la méthode débiter qui permet de retirer de l'argent depuis un compte en banque 

    public function debiter() : void {

        $somme =readline("Donner le montant à retirer: ");

        $this->solde -= $somme;

        echo "Opération bien effectuée \n";

        $this->afficheResumeCompte();
    }

// On crée la méthode debiterCpt qui permet de débiter un compte et ainsi créditer un autre compte

    public function debiterCpt(Compte $compte) : void {

        echo "Débiter le compte " .$this->code. " et créditer le compte " .$compte->getCode()."\n";

        $somme =readline("Donner le montant à retirer: ");

        echo "Opération bien effectuée \n";

        echo "****************************** \n";

        $this->solde -= $somme;

        $soldeCompte = $compte -> getSolde();

        $nouveauSolde = $soldeCompte + $somme;

        $compte = $compte->setSolde($nouveauSolde);
    }

// On crée une méthode afficheResumeCompte qui permet de voir toutes les données du compte, y compris le solde, le numéro du compte, et les caractéristiques du client

    public function afficheResumeCompte () : void {
        echo "Détails du compte: \n";
        echo "***************************** \n";

        echo "Numéro de compte : ".$this->code. "\n"; 
        echo "Solde de compte : ".$this->solde. "\n";
        echo "Propriétaire du compte : \n";
        $this->getProprietaire()->afficher()."\n";
        echo "****************************** \n";
    }


// On crée une méthode qui permet d'afficher le nombre de comptes crées

    public static function afficherCompteCree() : void {


        echo "Le nombre de comptes crées: ". self::$compteur;

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