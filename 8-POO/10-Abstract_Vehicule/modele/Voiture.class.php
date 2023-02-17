<?php

include_once "Vehicule.class.php";

class Voiture extends Vehicule {
    public function demarrer() {
      echo "Ca démarre." ;
      echo PHP_EOL;
    }
  
    public function accelerer() {
      echo "Ca accélère." ;
      echo PHP_EOL;
    }
  }