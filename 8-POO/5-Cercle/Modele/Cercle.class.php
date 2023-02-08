<?php
include_once "../modele/Point.class.php";
class Cercle
{//ATTRIBUTS
    public $centre;
    public $rayon;

    //CONTRUCTION
    public function __construct(float $ord, float $abs, float $ray){
        $this->centre = new Point($ord, $abs);
        $this->rayon = $ray;
    }

    public function getPerimetre() : void {
        $peri = 2 * pi() * $this->rayon;
        echo "Le périmétre est : $peri \n";
    }

    public function getSurface() : void {
        $Surf = $this->rayon * $this->rayon * pi();
        echo "La surface est : $Surf \n";
    }

    public function afficher() : void {
        $abscisse = $this -> centre-> getAbscisse();
        $ordonne = $this -> centre-> getOrdonne();
        echo "CERCLE($abscisse,$ordonne,$this->rayon)\n";
    }

    public function appartient(Point $point1) : void {
        $abscisse = $point1 -> getAbscisse();
        $ordonne = $point1 -> getOrdonne();
        $abscisseCentre = $this -> centre-> getAbscisse();
        $ordonneCentre = $this -> centre-> getOrdonne();

        $powabs = pow($abscisse - $abscisseCentre,2);
        $poword = pow($ordonne - $ordonneCentre,2);
        $distance = sqrt($powabs + $poword);
        if ($distance > $this->rayon){
           echo"Le point n'est pas dans le cercle";
        }
        else {
           echo "Le point est dans le cercle ";
        }
     }
}  


