<?php
include_once "../Model/Client.class.php";
//On définie la class Compte
class Compte{
    //On définie les attributs de la class compte
    private static $code;
    private $proprietaire;
    private $solde = 0;
    private $numCompte;
//On initialise la class à l'aide de __construct
public function __construct($cin,$nom,$prenom,$tel){
    $this->incrementation();
    $this->numCompte = $this::$code;
    $this->proprietaire = new Client($cin,$nom,$prenom,$tel);
}
//On définie ses méthodes 
//Ici on crée une méthodes pour incrémenté $code
public function incrementation(){
        $this::$code++;
}
//On définie la méthode pour l'affichage.
public function affichage(){
    $cin = $this->proprietaire->getCin();
    $nom = $this->proprietaire->getNom();
    $prenom = $this->proprietaire->getPrenom();
    $tel = $this->proprietaire->getTel();
    $solde = $this->getSolde();
    $code = $this->getCode();
    $numCompte = $this->getNumCompte();
    echo "║► Numéro de compte : $numCompte\n";
    echo "║                                                            \n";
    echo "║► Solde du compte : $solde\n";
    echo "║► Propriétaire du compte : \n";
    echo "║► CIN : $cin \n";
    echo "║► Nom : $nom\n";
    echo "║► Prénom : $prenom\n";
    echo "║► Tél : $tel\n";
}
//Méthode pour obtenir le numéro de compte
public function numCompte(){
    $code = $this->getCode();
    echo "Compte $code\n";
}
//Méthode pour crédier un compte
public function crediter($solde){
    $this->solde +=$solde;
}
//Méthode pour débiter un compte
public function debiter($solde){
    $this->solde -=$solde;
}
//Méthode pour créditer un compte depuis un autre compte
public function crediterCpt($somme,$compte){
    $solde = $this->getSolde();
    $newSolde = $solde - $somme;
    $this->solde = $newSolde; 
    $compte->solde = $compte->getSolde()+$somme;
    echo "║Opération bien effectué\n";

}
//Méthode pour débiter un compte depuis un autre compte.
public function debiterCpt($somme,$compte){
    $solde = $this->getSolde();
    $newSolde = $solde + $somme;
    $this->solde = $newSolde; 
    $compte->solde = $compte->getSolde()-$somme;
    echo "║Opération bien effectué\n";

}
//Ici on a tous les Getter & Setter nécéssaire.
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
?>