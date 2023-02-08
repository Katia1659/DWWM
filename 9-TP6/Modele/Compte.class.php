<?php
include_once "../modele/Client.class.php";
class Compte
{

    public float $solde;
    public static $compteur;
    public int $code;

    public Client $proprietaire;

    function __construct(Client $client)
    {

        $this->proprietaire = $client;
        $this->solde = 0;
        self::$compteur++;
        $this->code = self::$compteur;
    }

    public function crediter(float $montant): void
    {
        $this->solde = $this->solde + $montant;
        echo "Opération bien effectuée\n ******************************\n";
    }

    public function crediterCpt(float $montant, Compte $compte)
    {

        $this->solde = $this->solde + $montant;

        $soldeCompte = $compte->getsolde();
        $soldeFinal = $soldeCompte - $montant;

        $compte->setsolde($soldeFinal);
    }


    public function debiter(float $montant): void
    {
        $this->solde = $this->solde - $montant;
        echo "Opération bien effectuée\n******************************\n";
    }


    public function debiterCpt(float $montant, Compte $compte)
    {

        $this->solde = $this->solde - $montant;

        $soldeCompte = $compte->getsolde();
        $soldeFinal = $soldeCompte + $montant;

        $compte->setsolde($soldeFinal);
    }


    public function afficheCompte()
    {
        $cin = $this->proprietaire->getcin();
        $nom = $this->proprietaire->getnom();
        $prenom = $this->proprietaire->getprenom();
        $tel = $this->proprietaire->gettel();
        echo "Détails du compte:\n******************************\n";
        echo "Numéro de Compte: $this->code\nSolde de compte: $this->solde\nPropriétaire du compte :\nCIN: $cin\nNOM: $nom\nPrenom: $prenom\nTél: $tel\n******************************\n";
    }



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
}
