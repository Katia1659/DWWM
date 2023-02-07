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

    public function dansLeCercle($abscisse,$ordonne){
        //$result = sqrt(pow($x-$this->x)+pow($y-($this->y)));
        $powX = pow($abscisse - $this->abscisse,2);
        $powY = pow($ordonne- $this->ordonne,2);
        $distance = sqrt($powX + $powY);
        if ($distance > $this->rayon){
           echo"Le point n'est pas dans le cercle";
        }
        else {
           echo "Le point est dans le cercle ";
        }
     }



}  


