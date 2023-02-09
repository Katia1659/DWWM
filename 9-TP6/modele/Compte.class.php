<?php

include_once "../modele/Client.class.php";

class Compte
{
    private $solde;
    private static $code;
    private Client $proprietaire;


public function __construct($cin, $nom, $prenom, $tel)
{
    $this -> proprietaire = new Client($cin, $nom, $prenom, $tel);
    $this :: $code++;
}

public function afficher()
{
        echo "Détails du compte:".PHP_EOL;
        echo "************************".PHP_EOL;
        echo "Numéro de Compte ".$this :: $code;
        echo PHP_EOL;
        echo "Solde de compte ". $this -> solde;
        echo PHP_EOL;
        echo $this->getproprietaire()-> afficher();
        echo "************************".PHP_EOL;
        
        
}






public function crediter()
{
    $somme = readline("Donner le montant à déposer: ");
    echo "opération bien affectée";
    echo PHP_EOL;
    echo "*************************";
    echo PHP_EOL;
    
   $this ->  solde+=$somme;
   $this ->afficher ();
    
}

public function crediterCpt(Compte $compte)
{
    echo PHP_EOL;
    echo "Crediter le compte 2 à partir du compte 1 \n";
    $somme = readline("Donner le montant à déposer: ");
    echo "opération bien affectée";
    $this ->  solde+=$somme;
    $compte -> solde -= $somme;
    return $compte;

}

public function debiter()
{
    echo "*************************";
    echo PHP_EOL;
    $somme = readline("Donner le montant a retirer: ");
    echo "opération bien affectée";
    echo PHP_EOL;
    echo "*************************";
    echo PHP_EOL;
    $this->solde -= $somme;
   $this ->afficher ();

}

public function debiterCpt(Compte $compte)
{
    echo PHP_EOL;
    echo "Crediter le compte 2 à partir du compte 1 ";
    $somme = readline("Donner le montant à retirer: ");
    echo PHP_EOL;
    echo "opération bien affectée";
    echo PHP_EOL;
    $this->solde -= $somme;
    $compte->solde += $somme;
    return $compte;
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