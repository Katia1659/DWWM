<?php

<<<<<<< HEAD

include 'Point.class.php';

class Cercle{

    // declare attributs
    private Point $_centre;
    private $rayon;
    private $surface;
    private $perimetre;

    // methodes construct
    public function __construct($x,$y,$r) {
        $this->_centre = new Point($x,$y);
        $this->rayon = $r;
    }

    // methodes 
    public function calculPerim(){
        $r = $this->getRayon();
        $perim = (2 * 3.14 * $r);
        echo $perim;
    }

    public function calculSurface(){
        $r = $this->getRayon();
        $sur = 3.14 * ($r ** 2);
        echo $sur;
    }

   

    public function appartient($x, $y){
        $condition = sqrt(($this->_centre->getOrdonne() - $x) ** 2 + ($this->_centre->getAbcisse() - $y) ** 2);
        if ($condition < $this->getRayon()) {
           echo "appartient";
        }else{
            echo "appartient pas";
        }
        
    }
=======
class Cercle{

private 
>>>>>>> 58c6f322d258e35dbdb8b41e7095fc954c2528f9




<<<<<<< HEAD

    //get et set attributs


	/**
	 * @return mixed
	 */
	public function getPerimetre() {
		return $this->perimetre;
	}
	
	/**
	 * @param mixed $perimetre 
	 * @return self
	 */
	public function setPerimetre($perimetre): self {
		$this->perimetre = $perimetre;
		return $this;
	}


	/**
	 * @return mixed
	 */
	public function getSurface() {
		return $this->surface;
	}
	
	/**
	 * @param mixed $surface 
	 * @return self
	 */
	public function setSurface($surface): self {
		$this->surface = $surface;
		return $this;
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
     * Get the value of rayon
     */ 
    public function getRayon()
    {
        return $this->rayon;
    }

    /**
     * Set the value of rayon
     *
     * @return  self
     */ 
    public function setRayon($rayon)
    {
        $this->rayon = $rayon;

        return $this;
    }
}




// class Cercle
// {

//     private Point $_centre; //Objet de type Point
//     private int $_rayon; //le rayon : int


// public function __construct($x, $y, $rayon)
// {
//     $this->_centre = new Point($x, $y);
//     $this->_rayon = $rayon;
// }


  

//     /**
//      * Get the value of _rayon
//      */ 
//     public function get_rayon()
//     {
//         return $this->_rayon;
//     }

//     /**
//      * Set the value of _rayon
//      *
//      * @return  self
//      */ 
//     public function set_rayon($_rayon)
//     {
//         $this->_rayon = $_rayon;

//         return $this;
//     }

//         /**
//          * Get the value of _centre
//          */ 
//         public function get_centre()
//         {
//                 return $this->_centre;
//         }

//         /**
//          * Set the value of _centre
//          *
//          * @return  self
//          */ 
//         public function set_centre($_centre)
//         {
//                 $this->_centre = $_centre;

//                 return $this;
//         }
// }

=======
}


>>>>>>> 58c6f322d258e35dbdb8b41e7095fc954c2528f9
?>