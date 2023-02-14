<?php

class Etudiant extends Personne
{ //ATTRIBUTS
private $cne;

    //CONTRUCTION
    public function __construct(int $id, string $nom, string $prenom,string $cne)
    {
        parent::__construct( $id, $nom, $prenom);
        $this->cne = $cne;
    }


    public function __toString()
    {
        return parent::__tostring() . " mon CNE est : ". $this -> cne ;
    }


}
