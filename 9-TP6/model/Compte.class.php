<?php

include('Client.class.php');
class Compte
{
    private float $solde = 0;
    private static $code = 0;
    private $numeroCompte;
    private Client $client;

    public function __construct($cin,$nom,$prenom,$tel)
    {
        self::$code++;
        $this->numeroCompte = self::$code;
        $this->client = new Client($cin, $nom, $prenom, $tel);
    }

    public function crediter($somme):void{
        $newSolde = $this->solde + $somme;
        $this->solde = $newSolde;
        echo "Operation bien effectuée".PHP_EOL;
    }

    public function crediterCpt($somme,$compteDebite):void{
        $solde = $this->getSolde();
        $newSolde = $solde + $somme;
        $soldeDebiteur = $compteDebite->solde;
        $soldeDebiteur = $soldeDebiteur - $somme;
        $this->solde = $newSolde;
        $compteDebite->solde = $soldeDebiteur;
        echo "Operation bien effectuée".PHP_EOL;
    }

    public function debiterCpt($somme,$compteCredite):void{
        $solde = $this->getSolde();
        $newSolde = $solde + $somme;
        $soldeDebiteur = $compteCredite->solde;
        $soldeDebiteur = $soldeDebiteur - $somme;
        $this->solde = $newSolde;
        $compteCredite->solde = $soldeDebiteur;
        echo "Operation bien effectuée".PHP_EOL;
    }

    public function debiter($somme):void{
        $solde = $this->getSolde();
        $newSolde = $solde - $somme;
        $this->solde = $newSolde;
        echo "Operation bien effectuée".PHP_EOL;
    }

    public function afficherCpt():void{
        echo "***************************".PHP_EOL;
        echo "► Numéro de compte : " . $this->getNumeroCompte().PHP_EOL;
        echo "► Solde de compte : " . $this->getSolde().PHP_EOL;
        echo "► Proprietaire du compte : ".PHP_EOL;
        $this->client->afficher();
        echo "***************************".PHP_EOL;
    }


    public function AfficherNbCompte():void{
        $nbCompte = $this->getCode();
        echo " Le nombre de comptes crées : $nbCompte".PHP_EOL;
    }


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
    public static function getCode(){
        return static::$code;
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

    /**
     * Get the value of numeroCompte
     */ 
    public function getNumeroCompte()
    {
        return $this->numeroCompte;
    }

    
}
?>