<?php 

Class Point {
    private $x;
    private $y;
    private $rayon;

// Initialisation des attributs.
public function __construct($y, $x)
{
    $this->y= $y;
    $this->x= $x;
}



public function getPerimetre() : float{
    $perimetre = 2 * pi() * $rayon ;
    return $perimetre;
}

public function getSurface() : float {
    $aire = $this-> getRayon()  * $this-> getRayon() * pi();
    return $aire;

}

    /**
     * Get the value of x
     */ 
    public function getX()
    {
        return $this->x;
    }

    /**
     * Set the value of x
     *
     * @return  self
     */ 
    public function setX($x)
    {
        $this->x = $x;

        return $this;
    }

    /**
     * Get the value of y
     */ 
    public function getY()
    {
        return $this->y;
    }

    /**
     * Set the value of y
     *
     * @return  self
     */ 
    public function setY($y)
    {
        $this->y = $y;

        return $this;
    }
}

?>