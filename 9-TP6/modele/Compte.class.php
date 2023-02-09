<?php

include 'Client.class.php';

class Compte
{
    private $numCompte;
    private $solde;
    private $client;
    public static $my_compteur;

public function __construct($cin,$nom,$prenom,$tel)
{
    $this->client= new Client ($cin,$nom,$prenom,$tel);
    $this->solde = 0;
    self::$my_compteur++;
    $this->numCompte = self::$my_compteur;

}


public function afficher(Client $client)
{
    
   //Affiche toutes les infos du compte
    
    echo "******************* \n";
    echo "Numéro de Compte:".$this->numCompte."\n";
    echo "Solde de compte : ".$this->solde."\n";
    "Compte ".$this->numCompte.":"."\n";
    $client->afficher();

}

//Demande la somme a ajouter à un compte
public function crediter($somme)
{
    $this->solde= $this->solde + $somme;
    return $somme;
}

//Selectionne les 2 comptes pour effectuer un credit
public function crediterCpt(Compte $compte, float $somme)
{
    $this->crediter($somme);
   
   $compte->debiter($somme);
   
}

//Demande la somme a retirer à un compte
public function debiter($somme) 
{
    $this->solde= $this->solde - $somme;
    return $somme;
}

//Selectionne les 2 comptes pour effectuer un debit
public function debiterCpt(Compte $compte,float $somme) {

    $this->debiter($somme);
   
    $compte->crediter($somme);
}

//Affiche tout les infos
public function affichageResumeCompte(Client $client) {


    echo "******************* \n";
    echo "Numéro de Compte:".$this->numCompte."\n";
    echo "Solde de compte : ".$this->solde."\n";
    "Compte ".$this->numCompte.":"."\n";
    $client->afficher();

}

//Affiche le nombre de comptes crées
public function affichageNbComptes() {
    return self::$my_compteur;
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
     * Get the value of my_compteur
     */ 
    public function getMy_compteur()
    {
        return $this->my_compteur;
    }

    /**
     * Set the value of my_compteur
     *
     * @return  self
     */ 
    public function setMy_compteur($my_compteur)
    {
        $this->my_compteur = $my_compteur;

        return $this;
    }
}
 