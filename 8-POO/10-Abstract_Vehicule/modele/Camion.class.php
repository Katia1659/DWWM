<?php

class Camion extends Vehicule {

protected int $matricule;
public static $compteur;


public function __construct($annee,$prix){

    parent::__construct($annee,$prix);


    self::$compteur++;
    $this->matricule = self::$compteur;

   

}


public function __toString()
{
    return "----------------------"."\n".
     "Matricule : ".$this->matricule."\n"."Année du modèle : ".$this->annee."\n"."Prix : ".$this->prix."€"."\n". 
     "----------------------"."\n";
}

public function démarrer()
{
    return "Je tourne la clé, le camion démarre"."\n";
}

public function accélérer()
{
    return "J'appuie sur l'accélérateur, le camion accélére"."\n";
}

/**
 * Get the value of matricule
 */ 
public function getMatricule()
{
return $this->matricule;
}

/**
 * Set the value of matricule
 *
 * @return  self
 */ 
public function setMatricule($matricule)
{
$this->matricule = $matricule;

return $this;
}
}