<?php 

Class Point {
    private $abs;
    private $ord;

// Initialisation des attributs.
public function __construct($abs, $ord)
{
    $this->abs= $abs;
    $this->ord= $ord;
}


    /**
     * Get the value of abs
     */ 
    public function getAbs()
    {
        return $this->abs;
    }

    /**
     * Set the value of abs
     *
     * @return  self
     */ 
    public function setAbs($abs)
    {
        $this->abs = $abs;

        return $this;
    }

    /**
     * Get the value of ord
     */ 
    public function getOrd()
    {
        return $this->ord;
    }

    /**
     * Set the value of ord
     *
     * @return  self
     */ 
    public function setOrd($ord)
    {
        $this->ord = $ord;

        return $this;
    }


// Creation de la méthode calculant la norme d'un vecteur
public function norme(){
    $y = $this-> getAbs();
    $x = $this-> getOrd();
    $result = sqrt(($y**2)+($x**2));
    return $result;

}


}

?>