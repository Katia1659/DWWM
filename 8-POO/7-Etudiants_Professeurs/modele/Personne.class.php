<?php

/**
 * Classe Personne 
 */

class Personne
{
   protected int $id=0;
   protected string $nom;
   protected string $prenom;

   /**
    * Constructeur class mere Personne
    */

   public function  __construct(string $nom, string $prenom)
   {
      $this->nom = $nom;
      $this->prenom = $prenom;
      $this->id++;
   }

   /**
    * Methode __toString class personne
    *@return string
    */
  
   public function __toString():string
    {
        return "je suis " . $this->nom . " " . $this->prenom ;
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
}
