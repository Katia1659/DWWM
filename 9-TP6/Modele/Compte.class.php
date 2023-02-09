<?php
include_once "../modele/Client.class.php";
class Compte { 
    //ATTRIBUTS
    private float $solde;
    public static $compteur;
    private int $code;
    private Client $proprietaire;

    //CONTRUCTION
    function __construct(Client $client)
    {
        $this->proprietaire = $client;
        $this->solde = 0;
        // LES "::" REMPLACE LA "->" et le "SELF" REMPLACE LE "THIS" QUAND c'est un STATIC
        self::$compteur++;
        // le compteur qui change à chaque nouveau compte, est enregistré en fixe que l'OBJET
        $this->code = self::$compteur;
    }

    //POUR CREDITER UN MONTANT
    public function crediter(float $montant): void
    {
        $this->solde = $this->solde + $montant;
        echo "Opération bien effectuée\n******************************\n";
    }

    // POUR CREDITER UN MONTANT SUR CE COMPTE et DEBITER UN COMPTE DESIGNE
    public function crediterCpt(float $montant, Compte $compte): void
    {
        $this->solde = $this->solde + $montant;

        $soldeCompte = $compte->getsolde();
        $soldeFinal = $soldeCompte - $montant;
        //TECHNIQUE POUR NE PAS UTILISER DE SET 
        $compte->solde = $soldeFinal;
        echo "Opération bien effectuée\n******************************\n";
    }

    //POUR DEBITER UN MONTANT
    public function debiter(float $montant): void
    {
        $this->solde = $this->solde - $montant;
        echo "Opération bien effectuée\n******************************\n";
    }

    // POUR DEBITER UN MONTANT SUR CE COMPTE et CREDITER UN COMPTE DESIGNE
    public function debiterCpt(float $montant, Compte $compte)
    {
        $this->solde = $this->solde - $montant;

        $soldeCompte = $compte->getsolde();
        $soldeFinal = $soldeCompte + $montant;
        //TECHNIQUE POUR NE PAS UTILISER DE SET 
        $compte->solde = $soldeFinal;
        echo "Opération bien effectuée\n******************************\n";
    }

    // AFFICHE LE COMPTE
    public function afficheCompte()
    {
        $cin = $this->proprietaire->getcin();
        $nom = $this->proprietaire->getnom();
        $prenom = $this->proprietaire->getprenom();
        $tel = $this->proprietaire->gettel();
        echo "Détails du compte:\n******************************\n";
        echo "Numéro de Compte: $this->code\nSolde de compte: $this->solde\nPropriétaire du compte :\nCIN: $cin\nNOM: $nom\nPrenom: $prenom\nTél: $tel\n******************************\n";
    }

    // GET ET SET 
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
        return $this->code;
    }


    /**
     * Get the value of proprietaire
     */
    public function getProprietaire()
    {
        return $this->proprietaire;
    }



    /**
     * Get the value of compteur
     */
    public function getCompteur()
    {
        return $this->compteur;
    }
}
