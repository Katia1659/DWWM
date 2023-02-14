<?php
require_once 'Personne.class.php';
class Employe extends Personne
{
    //iniliation attribut
    protected float $salaire;

    //construct
    public function __construct($nom, $prenom, $salaire)
    {
        parent::__construct($nom, $prenom);
        $this->salaire = $salaire;
    }
    //method d'affichage
    public function __toString()
    {
        return parent::__tostring() . "mon salaire est : " . $this->salaire;
    }
}
