<?php

class Point
{
    private $x;
    private $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function norme(): float
    {
        $x = $this->x;
        $y = $this->y;
        $norme = sqrt(pow($x, 2) + pow($y, 2));
        return $norme;
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
