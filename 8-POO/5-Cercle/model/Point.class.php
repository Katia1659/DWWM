<?php
class Point{
    private float $x ;
    private float $y ;
    public function __construct($x,$y){
        $this ->x = $x;
        $this ->y =$y;
}
    /**
    * @return float
    */
    public function getX(): float
    {
        return $this->x;
    }

    /**
    * @param float $x
    */
    public function setX(float $x): void
    {
        $this->x = $x;
    }

    /**
    * @return float
    */
    public function getY(): float
    {
        return $this->y;
    }

    /**
    * @param float $y
    */
    public function setY(float $y): void
    {
        $this->y = $y;
    }

}