<?php

    class Article{

            private $reference;
            private $designation;
            private $prixHT;
            private $tauxTVA;

        public function __construct($reference, $designation, $prixHT){

            $this->reference = $reference;
            $this->designation = $designation;
            $this->prixHT = $prixHT;
        
    }

        public function CalculerPrixTTC(){
            
            return $this->prixHT * (1 + ($this->tauxTVA / 100));
        }


        public function AfficherArticle(){

            echo "Référence :" .$this->reference;
            echo ("\n");
            echo "Désignation :". $this->designation;
            echo ("\n");
            echo "Prix HT : " . $this->prixHT;
            echo ("\n");
            echo "Prix TTC :".  $this->CalculerPrixTTC();
            echo ("\n");
            echo ("\n");
        }

        /**
         * Get the value of reference
         */ 
        public function getReference()
        {
                return $this->reference;
        }

        /**
         * Set the value of reference
         *
         * @return  self
         */ 
        public function setReference($reference)
        {
                $this->reference = $reference;

                return $this;
        }

        /**
         * Get the value of designation
         */ 
        public function getDesignation()
        {
                return $this->designation;
        }

        /**
         * Set the value of designation
         *
         * @return  self
         */ 
        public function setDesignation($designation)
        {
                $this->designation = $designation;

                return $this;
        }

        /**
         * Get the value of prixHT
         */ 
        public function getPrixHT()
        {
                return $this->prixHT;
        }

        /**
         * Set the value of prixHT
         *
         * @return  self
         */ 
        public function setPrixHT($prixHT)
        {
                $this->prixHT = $prixHT;

                return $this;
        }

        /**
         * Get the value of tauxTVA
         */ 
        public function getTauxTVA()
        {
                return $this->tauxTVA;
        }

        /**
         * Set the value of tauxTVA
         *
         * @return  self
         */ 
        public function setTauxTVA($tauxTVA)
        {
                $this->tauxTVA = $tauxTVA;

                return $this;
        }
    }



?>