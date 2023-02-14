<?php
require_once 'Employe.class.php';
class Professeur extends Employe
{
    //Initialisation attributs
    private string $_specialite;

    //construct
    public function __construct($nom, $prenom, $salaire, $specialite)
    {
        parent::__construct($nom, $prenom, $salaire);
        $this->_specialite = $specialite;
    }

    //method qui affichera
    public function __toString()
    {
        return parent::__toString(). " ma spécialité est : ".$this->_specialite;
    }
}
