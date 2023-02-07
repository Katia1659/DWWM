<?php



class Livre
{
    private $titre;
    private $auteur;
    private $prix;

    public function __construct($titre,$nom,$prix)
    {
        $this->titre=$titre;
        $this->auteur=$nom;
        $this->prix=$prix;
    }

    public function afficher()
    {
        echo $this.":\n";
        echo "Le titre du livre est : $this->titre \n";
        echo "L'auteur est: $this->auteur \n";
        echo "le prix est: $this->prix";
    }
}
