<?php


class Client
{
    private $cin;
    private $nom;
    private $prenom;
    private $telNum;

    /**
     * Contructeur de la classe Client:
     */
    
    public function __construct($cin, $nom, $prenom, $telNum)
    {
        $this->cin = $cin;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->telNum = $telNum;
    }
    /**
     * Fonction affichage 
     *@return void
     */

    public function afficher(): void
    {
        echo "-----------------------------\t
          Détail de Client:\t
          -----------------\t
          Propiètaire de compte:\t
          CIN: $this->cin \t
          NOM: $this->nom \t
          PRENOM:$this->prenom \t
          Tél: $this->telNum \n";
    }


    /**
     * Get the value of cin
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * Set the value of cin
     *
     * @return  self
     */
    public function setCin($cin)
    {
        $this->cin = $cin;

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
     * Get the value of telNum
     */
    public function getTelNum()
    {
        return $this->telNum;
    }

    /**
     * Set the value of telNum
     *
     * @return  self
     */
    public function setTelNum($telNum)
    {
        $this->telNum = $telNum;

        return $this;
    }
}
