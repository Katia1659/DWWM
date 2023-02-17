<?php

class Camion extends Vehicule {
    public function demarrer() {
      echo "Ca démarre.";
      echo PHP_EOL;
    }
  
    public function accelerer() {
      echo "Ca accélère.";
      echo PHP_EOL;
    }
  }