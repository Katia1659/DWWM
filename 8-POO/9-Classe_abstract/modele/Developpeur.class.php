<?php 



class Developpeur extends Personne {

    private String $_specialite;    

    public static $compteur = 1;
    protected int $id;

 
public function __construct($_specialite,$nom,$prenom,$mail,$telephone,$salaire)
{
    parent::__construct($nom,$prenom,$mail,$telephone,$salaire);

    self::$compteur++;
    $this->id = self::$compteur;

    $this->_specialite = $_specialite;
    
}

public function calculerSalaire() {
    
    return $this->salaire*=1.20;

}    

public function afficher() {

    echo "Le salaire du développeur".$this->nom." ".$this->prenom." est : ".$this->salaire."€, sa specialite : ".$this->_specialite."\n";
    
}

    /**
     * Get the value of _specialite
     */ 
    public function get_specialite()
    {
        return $this->_specialite;
    }

    /**
     * Set the value of _specialite
     *
     * @return  self
     */ 
    public function set_specialite($_specialite)
    {
        $this->_specialite = $_specialite;

        return $this;
    }
}
