<?php

class Personne
{ //ATTRIBUTS
    protected $id;
    protected $nom;
    protected $prenom;

    //CONTRUCTION
    public function __construct(int $id, string $nom, string $prenom)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function __toString()
    {
        return "je suis " . $this->nom . " " . $this->prenom ;
    }



}