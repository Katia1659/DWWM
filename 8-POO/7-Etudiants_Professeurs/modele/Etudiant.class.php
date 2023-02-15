<?php

//on defini la class Etudiant et ses attributs
class Etudiant extends Personne
{
    private $cne;
//on defini le constucteur
    public function __construct(string $cne,int $id, string $nom, string $prenom)
    {
        parent::__construct($id, $nom, $prenom);
        $this->cne = $cne;
    }
//on defini la methode tostring pour l'affichage
    public function __toString()
    {
        return parent::__toString() ."mon CNE est $this->cne";
    }
}

?>