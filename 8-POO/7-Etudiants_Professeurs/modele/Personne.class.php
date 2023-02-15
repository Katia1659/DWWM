<?php
//on defini la class personne et ses attributs
Class Personne
{
    protected int $id;
    protected string $nom;
    protected string $prenom;

    //on defini le constucteur
    public function __construct(int $id, string $nom, string $prenom)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    //on defini la methode tostring pour l'affichage
    public function __toString()
    {
        return "Je suis $this->nom $this->prenom ";
    }
}

?>