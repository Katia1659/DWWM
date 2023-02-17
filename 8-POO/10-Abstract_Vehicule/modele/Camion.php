<?php

class Camion extends Vehicule
{
    private $id;
    public static $count;


    public function __construct($annee, $modele, $prix)
    {
        parent::__construct($annee, $modele, $prix);
        self::$count++;
        $this->id=self::$count;

    }
    /**
     * @return string
     */

    public function __toString(){
        // TODO: Implement __toString() method.
        return "--Camion n°:".$this->id."\n".parent::__toString();
    }

    /**
     * @inheritDoc
     */
    public function demarrer()
    {
        // TODO: Implement demarrer() method.
        echo "Le Camion ".$this->modele."  Démarre.";
    }

    /**
     * @inheritDoc
     */
    public function accelerer()
    {
        // TODO: Implement accelerer() method.
        echo "Le Camion ".$this->modele." Accélère.";
    }
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }


}