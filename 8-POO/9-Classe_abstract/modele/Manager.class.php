<?php 



class Manager extends Personne {

    private $_service;    

    public static $compteur = 1;
    protected int $id;

 
public function __construct($_service,$nom,$prenom,$mail,$telephone,$salaire)
{
    parent::__construct($nom,$prenom,$mail,$telephone,$salaire);

    self::$compteur++;
    $this->id = self::$compteur;

    $this->_service->$_service;
    
}

public function calculerSalaire() {
    
    return $this->salaire*=1.35;

}

public function afficher() {

    return "Le salaire du manager".$this->nom." ".$this->prenom." est : ".$this->salaire."€, son service : ".$this->_service;
    
}

    /**
     * Get the value of _service
     */ 
    public function get_service()
    {
        return $this->_service;
    }

    /**
     * Set the value of _service
     *
     * @return  self
     */ 
    public function set_service($_service)
    {
        $this->_service = $_service;

        return $this;
    }
} 