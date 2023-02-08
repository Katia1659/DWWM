<?php

include 'Client.class.php';

class Compte
{
    private Client $client;
    private int $solde;
    private static int $code;


public function __construct($cin,$nom,$prenom,$tel,$solde,$code)
{
    $this->client = new Client ($cin,$nom,$prenom,$tel);
    $this->solde = $solde;
    $this::$code++;
//  $code =  $this->autoIncrement();
//     Compte::$code;
}

// public function autoIncrement() 
// {
//     $this::$code++;
// }


public function afficher(Client $client)
{
    
   

    echo "******************* \n";
    echo "Numéro de Compte:".$this->code."\n";
    echo "Solde de compte : ".$this->solde."\n";
    $client->afficher();

}

public function crediter($somme)
{
    $somme += $this->solde;
    echo $somme;
}

public function crediterCpt(Compte $compte,$somme)
{
    $crediter = $somme->crediter();
   
   
    $debiteur = $compte->getCode();
   
    $newSolde = $debiteur-$crediter;

   echo $newSolde;
}

public function debiter($somme) 
{
    $somme -= $this->solde;
    echo $somme;
}


public function debiterCpt(Compte $compte,$somme) {

    $debiter = $somme->debiter();
   
   
    $debiteur = $compte->getCode();
   
   $newSolde = $debiter+$debiteur;

   echo $newSolde;
}

public function affichageResumeCompte() {

    return "";


}

public function affichageNbComptes() {
    return "Le nombre de comptes crées:".$this->code;
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
}