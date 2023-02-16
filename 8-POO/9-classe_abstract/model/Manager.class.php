<?php

//creation de la classe manager 
class Manager extends Personne
{
    private string $_service;

    //on defini le constucteur

    public function __construct(string $nom, string $prenom, string $mail, string $telephone,float $salaire, string $_service )
    {
        parent::__construct($nom, $prenom, $mail, $telephone, $salaire);
        $this->_service = $_service;
        
    }

    //methode pour afficher
    public function afficher():void {
        echo PHP_EOL."Le salaire du manager $this->nom $this->prenom est : $this->salaire €, son service : $this->_service".PHP_EOL;
        
    }

    //methode pour calculer le salaire
    public function calculerSalaire(){
        $this->salaire = $this->salaire *1.35;
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
?>