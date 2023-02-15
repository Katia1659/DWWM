<?php

/**
 * Classe Personne 
 */

class Personne
{
   protected int $id=0;
   protected string $nom;
   protected string $prenom;
   protected string $mail;
   protected string $telephone;
   protected float $salaire;

   /**
    * Constructeur class mere Personne
    */

   public function  __construct(string $nom, string $prenom, string $mail, string $telephone, string $salaire)
   {
      $this->nom = $nom;
      $this->prenom = $prenom;
      $this->mail=$mail;
      $this->telephone=$telephone;
      $this->salaire=$salaire;
      $this->id++;
   }

   /**
    * Methode __toString class personne
    *@return void
    */
  
   protected function affiche():void
    {
        echo   "---------Personne------------------------\n"
               ."Nom:  " . $this->nom . "\n"
               ."Prenom: ". $this->prenom ."\n"
               ."mail: ".$this->mail."\n"
               ."telephone: ".$this->telephone."\n"
               ."Salaire : ".$this->salaire." €"."\n";
    }
    
    /**
     * 
     * Methode calculerSalaire()
     * @return float
     */
   public function calculerSalaire():float
   {
      return $this->salaire;
   }


   /**
    * Get the value of id
    */
   public function getId()
   {
      return $this->id;
   }

   /**
    * Set the value of id
    *
    * @return  self
    */
   public function setId($id)
   {
      $this->id = $id;

      return $this;
   }

   /**
    * Get the value of nom
    */
   public function getNom()
   {
      return $this->nom;
   }

   /**
    * Set the value of nom
    *
    * @return  self
    */
   public function setNom($nom)
   {
      $this->nom = $nom;

      return $this;
   }

   /**
    * Get the value of prenom
    */
   public function getPrenom()
   {
      return $this->prenom;
   }

   /**
    * Set the value of prenom
    *
    * @return  self
    */
   public function setPrenom($prenom)
   {
      $this->prenom = $prenom;

      return $this;
   }

   /**
    * Get the value of mail
    */ 
   public function getMail()
   {
      return $this->mail;
   }

   /**
    * Set the value of mail
    *
    * @return  self
    */ 
   public function setMail($mail)
   {
      $this->mail = $mail;

      return $this;
   }

   /**
    * Get the value of telephone
    */ 
   public function getTelephone()
   {
      return $this->telephone;
   }

   /**
    * Set the value of telephone
    *
    * @return  self
    */ 
   public function setTelephone($telephone)
   {
      $this->telephone = $telephone;

      return $this;
   }

   /**
    * Get the value of salaire
    */ 
   public function getSalaire()
   {
      return $this->salaire;
   }

   /**
    * Set the value of salaire
    *
    * @return  self
    */ 
   public function setSalaire($salaire)
   {
      $this->salaire = $salaire;

      return $this;
   }
}
