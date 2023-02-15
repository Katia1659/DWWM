<?php
class Manager extends Personne
{
    private string $_service;

    //on defini le constucteur

    public function __construct(string $nom, string $prenom, string $mail, string $telephone,float $salaire, string $_service )
    {
        parent::__construct($nom, $prenom, $mail, $telephone, $salaire);
        $this->_service = $_service;
        
    }

  
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