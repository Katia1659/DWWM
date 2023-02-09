<?php


class Point {

    //attributs 
    private $abcisse;
    private $ordonne;

    //methode construct
    public function __construct($abcisse, $ordonne)
    {
        $this->abcisse = $abcisse;
        $this->ordonne = $ordonne; 
    }


    //methode 
    public function norme () : float {
        $abcisse = $this->getAbcisse();
        $ordonne = $this->getOrdonne();
        

        $norme = sqrt($abcisse**2 + $ordonne**2);
        return $norme;

    }


    // get et set des attributs 


    /**
     * Get the value of ordonne
     */ 
    public function getOrdonne()
    {
    return $this->ordonne;
    }



    /**
     * Set the value of ordonne
     *
     * @return  self
     */ 
    public function setOrdonne($ordonne)
    {
    $this->ordonne = $ordonne;

    return $this;
    }



    /**
     * Get the value of abcisse
     */ 
    public function getAbcisse()
    {
    return $this->abcisse;
    }



    /**
     * Set the value of abcisse
     *
     * @return  self
     */ 
    public function setAbcisse($abcisse)
    {
    $this->abcisse = $abcisse;

    return $this;
    }
}



?>