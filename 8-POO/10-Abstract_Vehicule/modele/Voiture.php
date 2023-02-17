<?php

class Voiture extends Vehicule
{

    private $id;
    public static $count;

    /**
     * @param $couleur
     * @param $series
     * @param $type
     */
    public function __construct($annee, $modele, $prix)
    {
        parent::__construct($annee,$modele,$prix);
        self::$count++;
        $this->id=self::$count;

    }

    /**
     * @return string
     */

    public function __toString(){
 // TODO: Implement __toString() method.
        return "--Voiture n°:".$this->id."\n".parent::__toString();

}

    /**
     * @inheritDoc
     */
    public function demarrer()
    {
        // TODO: Implement demarrer() method.
        echo "La voiture ".$this->modele."  Démarre.";;
    }

    /**
     * @inheritDoc
     */
    public function accelerer()
    {
        // TODO: Implement accelerer() method.
        echo "La voiture ".$this->modele." Accélère.";
    }


    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }


}