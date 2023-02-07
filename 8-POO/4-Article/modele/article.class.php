<?php
    Class Article{
        private $reference;
        private $designation;
        private $prixHt;
        private $tauxTva;
        
        public function __construct($reference,$designation){
            $this->reference = $reference;
            $this->designation = $designation;
            //$this->prixHt = $prixHt;
            //$this->tauxTva = $tauxTva;          
        }

        //methode pour prix TTC
        public function calculerPrixTtc(){
                $prixHt = $this->getPrixHt();
                $tauxTva = $this->getTauxTva();
                $valeurCalcul = $prixHt + ($prixHt * $tauxTva/100);
                return $valeurCalcul;
                // $valeurCalculee = $this->prixHt + ($this->prixHt*$this->tauxTva/100);
                // return $valeurCalculee;
        }
        //methode pour afficher le prix
        public function afficherArticle(){
                $reference = $this->getReference();
                $designation = $this->getDesignation();
                $prixHt = $this->getPrixHt();
                $valeurCalculee = $this->calculerPrixTtc();
                echo "Référence : ".$reference."\n";
                echo "Designation : ".$designation."\n";
                echo "Prix HT : ".$prixHt."\n";
                echo "prix TTC : ".$valeurCalculee."\n";
          
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
         * Get the value of prixHt
         */ 
        public function getPrixHt()
        {
                return $this->prixHt;
        }

        /**
         * Set the value of prixHt
         *
         * @return  self
         */ 
        public function setPrixHt($prixHt)
        {
                $this->prixHt = $prixHt;

                return $this;
        }

        /**
         * Get the value of tauxTva
         */ 
        public function getTauxTva()
        {
                return $this->tauxTva;
        }

        /**
         * Set the value of tauxTva
         *
         * @return  self
         */ 
        public function setTauxTva($tauxTva)
        {
                $this->tauxTva = $tauxTva;

                return $this;
        }

    }
?>