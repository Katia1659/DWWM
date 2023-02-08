 <?php
include 'Point.class.php';

class Cercle
{

    private Point $_centre; //Objet de type Point
    private int $_rayon; //le rayon : int


public function __construct($x, $y, $rayon)
{
    $this->_centre = new Point($x, $y);
    $this->_rayon = $rayon;
}

//Calcul du périmétre
public function getPerimetre() 
{
    
     $peri = 2*pi()*$this->_rayon;

     return $peri;
      
}

//Calcul de la surface
 public function getSurface() 
{

    $surface = pi()*pow($this->_rayon,2);

    return $surface;
}

//Methode pour savoir si un point appartient à un cercle
 public function appartient(Point $point) {    
    
$xP = $point->getXP();
$yP = $point->getYP();

$centre = $this->_centre;

$calcul = ($xP - $centre->getXP())**2 + ($yP -  $centre->getYP())**2;

if ($calcul < pow($this->_rayon,2)) 

{
return "Le point appartient au cercle"."\n";

} else {

return "Le point n'appartient pas au cercle"."\n";
}
}


//Methode pour afficher
public function afficher()

{ 
    $centre = $this->_centre;
    echo "Le périmétre est: ".$this->getPerimetre()."\n";

    
    echo "La surface est : ".$this->getSurface()."\n";
return "CERCLE(".$centre->afficher().",".$this->_rayon.")"."\n";

} 

    /**
     * Get the value of _centre
     */ 
    public function get_centre()
    {
        return $this->_centre;
    }

    /**
     * Set the value of _centre
     *
     * @return  self
     */ 
    public function set_centre($_centre)
    {
        $this->_centre = $_centre;

        return $this;
    }

    /**
     * Get the value of _rayon
     */ 
    public function get_rayon()
    {
        return $this->_rayon;
    }

    /**
     * Set the value of _rayon
     *
     * @return  self
     */ 
    public function set_rayon($_rayon)
    {
        $this->_rayon = $_rayon;

        return $this;
    }
}