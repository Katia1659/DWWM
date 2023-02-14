<?php
class Personne
{
    //initialisation des attribut
    private static $_compteur;
    protected int $id;
    protected string $nom;
    protected string $prenom;

    //construct
    public function __construct(string $nom, string $prenom)
    {
        $this::$_compteur ++;
        $this->id = $this::$_compteur;
        $this->nom = $nom;
        $this->prenom = $prenom;

    }

    //method qui affichera
    public function __toString()
    {
        return "Je suis " . $this->nom . " " . $this->prenom . ' ';
    }

}
