<?php
class Developpeur extends Personne
{
    private string $_specialite;

    //on defini le constucteur

    public function __construct(string $nom, string $prenom, string $mail, string $telephone,float $salaire, string $_specialite )
    {
        parent::__construct($nom, $prenom, $mail, $telephone, $salaire);
        $this->_specialite = $_specialite;
        
    }

    public function calculerSalaire(){
        $this->salaire = $this->salaire *1.2;

    }

    public function afficher():string {
        $texte = "$this->nom $this->prenom".PHP_EOL."salaire : $this->salaire".PHP_EOL."mail : $this->mail".PHP_EOL."telephone : $this->telephone".PHP_EOL."salaire : $this->salaire".PHP_EOL."specialité : $this->_specialite";
        return $texte;
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
?>