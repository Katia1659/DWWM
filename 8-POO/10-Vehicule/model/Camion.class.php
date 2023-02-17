<?php

//creation de la classe manager 
class Camion extends Vehicule
{

    //on defini le constucteur

    public function __construct(int $anneeModele, float $prix)
    {
        parent::__construct($anneeModele, $prix);        
    }

    public function demarrer(){
       echo "le camion demarre bien".PHP_EOL;
    } 
    public function accelerer(){
        echo "le camion accelere bien ".PHP_EOL;
    }
    
    public function __toString(){
echo PHP_EOL."--------details du camion--------".PHP_EOL ;
return parent::__toString();
    }

    
}
?>