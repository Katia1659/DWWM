<?php
require_once 'Personne.class.php';
class Etudiant extends Personne
{
    //Initialisation attributs
    private string $_cne;

    //construct
    public function __construct(string $nom, string $prenom, string $cne){
        parent::__construct($nom, $prenom);
        $this->_cne = $cne;

    }

    //method d'affichage
    public function __toString() {
        return parent::__toString() . " mon CNE est : " . $this->_cne;
    }


}
