<?php 
Class Article {
   private $reference;
   private $designation;
   private $prixHT;
   private $tauxTVA;

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
    * Get the value of TauxTVA
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
   public function __construct($reference, $designation, $prixHT, $prixTVA){
      $this->reference = "";
      $this->designation = "";
      $this->prixHT = "";
      $this->tauxTVA = "";}
   
      public function prixTTC($prixHT, $tauxTVA){
         $prixTTC = $prixHT + (($prixHT*$tauxTVA)/100);
         return $prixTTC;
      }
      public function afficherArticle($numArticle,$prixTTC){
         echo "
         Article $numArticle \n
         Référence : $this->reference \n
         Désignation : $this->designation \n
         Prix HT : $this->prixHT \n
         Le prix TTC est de $prixTTC \n"; 
      }
   }
   
      
?>