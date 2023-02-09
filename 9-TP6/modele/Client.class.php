<?php


class Client
{
    private $cin;
    private $nom;
    private $prenom;
    private $tel;

    public function __construct($cin, $nom, $prenom, $tel){
        $this->cin = $cin;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->tel = $tel;
    }

    /**
     * @return mixed
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * @param mixed $cin
     */
    public function setCin($cin)
    {
        $this->cin = $cin;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param mixed $tel
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    //Method pour afficher les attributs du client
    public function afficher(){
        $cin = $this->getCin();
        $nom = $this->getNom();
        $prenom = $this->getPrenom();
        $tel = $this->getTel();

        echo " ————————————————————————————————\n";
        echo "│         CIN : $cin              \n";
        echo "│         Nom : $nom              \n";
        echo "│        Prenom : $prenom           \n";
        echo "│         Tél : $tel              \n";
        echo " ————————————————————————————————\n";
    }
}