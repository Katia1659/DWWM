<?php

class Voiture extends Vehicule {

protected int $matricule;
public static $compteur=1;


public function __construct($annee,$prix){


    self::$compteur++;
    $this->matricule = self::$compteur;

    parent::__construct($annee,$prix);

}


public function __toString()
{
    return "----------------------"."\n";
    return "Matricule : ".$this->matricule."\n"."Année du modèle : ".$this->annee."\n"."Prix : ".$this->prix."€"."\n"; 
    return "----------------------"."\n";
}

public function démarrer()
{
    return "Je tourne la clé, la voiture démarre"."\n";
}

public function accélérer()
{
    return "J'appuie sur l'accélérateur, la voiture accélére"."\n";
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






   
