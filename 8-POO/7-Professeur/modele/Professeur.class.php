<?php

//on defini la class Professeur et ses attributs
class Professeur extends Employe
{
    protected string $specialite;

    //on defini le constucteur

    public function __construct(string $specialite , float $salaire,int $id, string $nom, string $prenom)
    {
        parent::__construct($salaire, $id, $nom, $prenom);
        $this->specialite = $specialite;
    }

    //on defini la methode tostring pour l'affichage
    public function __toString()
    {
        return parent::__toString() . "ma specialité est : $this->specialite";
    }
}