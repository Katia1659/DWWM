<?php

//on defini la class Employe et ses attributs
class Employe extends Personne
{
    protected float $salaire;

    //on defini le constucteur

    public function __construct(float $salaire,int $id, string $nom, string $prenom)
    {
        parent::__construct($id, $nom, $prenom);
        $this->salaire = $salaire;
    }

    //on defini la methode tostring pour l'affichage
    public function __toString()
    {
        return parent::__toString() . "mon salaire est : $this->salaire € ";
    }


}