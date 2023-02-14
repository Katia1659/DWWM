<?php

class Employe extends Personne
{ //ATTRIBUTS
    protected $salaire;

    //CONTRUCTION
    public function __construct(int $id, string $nom, string $prenom, int $salaire)
    {
        parent::__construct( $id, $nom, $prenom);
        $this->salaire = $salaire;
    }

    public function __toString()
    {
       return parent::__tostring() . " mon salaire est: ". $this->salaire ." €";
    }



}
