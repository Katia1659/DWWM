<?php
class Cercle
{//ATTRIBUTS
    public $abscisse;
    public $ordonne;
    public $rayon;

    //CONTRUCTION
    public function __construct($ord, $abs, $ray){
        $this->abscisse = $abs;
        $this->ordonne = $ord;
        $this->rayon = $ray;
    }

    public function getPerimetre(){
        $peri = 2 * pi() * $this->rayon;
        echo "Le périmétre est : $peri \n";
    }

    public function getSurface(){
        $Surf = $this->rayon * $this->rayon * pi();
        echo "La surface est : $Surf \n";
    }

    public function afficher(){
        echo "CERCLE($this->abscisse,$this->ordonne,$this->rayon)\n";
    }

    public function appartient($abscisse,$ordonne){
        //$result = sqrt(pow($x-$this->x)+pow($y-($this->y)));
        $powabs = pow($abscisse - $this->abscisse,2);
        $poword = pow($ordonne- $this->ordonne,2);
        $distance = sqrt($powabs + $poword);
        if ($distance > $this->rayon){
           echo"Le point n'est pas dans le cercle";
        }
        else {
           echo "Le point est dans le cercle ";
        }
     }
}  


