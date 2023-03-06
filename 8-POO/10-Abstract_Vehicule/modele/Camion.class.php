<?php
require_once 'Vehicule.class.php';
class Camion extends Vehicule
{
    //Construct
    public function __construct(int $annee, float $prix)
    {
        parent::__construct($annee, $prix);
    }
    //method demarrer qui enverra un string en fonction de l'année du camion
    public function demarrer(): string
    {
        if ($this->getAnneeModele() >= 2000)
        {
            $rep = "Le camion". $this->getMatricule()." démarre bien \n";
        } elseif ($this->getAnneeModele() < 2000 && $this->getAnneeModele() > 1985) {
            $rep = "Le camion". $this->getMatricule()." galère un peu a démarrer \n";
        } elseif ($this->getAnneeModele() <= 1985) {
            $rep = "Le camion". $this->getMatricule()." galère a démarrer \n";
        }
        return $rep;
    }

    //method accelerer qui enverra un string en fonction de l'année du camion
    public function accelerer(): string
    {
        if ($this->getAnneeModele() >= 2000)
        {
            $rep = "Le camion". $this->getMatricule()." accélére vitesse maximale \n";
        } elseif ($this->getAnneeModele() < 2000 && $this->getAnneeModele() > 1985) {
            $rep = "Le camion". $this->getMatricule()." accélére vitesse moyenne \n";
        } elseif ($this->getAnneeModele() <= 1985) {
            $rep = "Le camion". $this->getMatricule()." accélére vitesse lente \n";
        }
        return $rep;
    }

    //method toString
    public function __toString():string
    {
        return parent::__toString(). $this->demarrer(). $this->accelerer();
    }

}
