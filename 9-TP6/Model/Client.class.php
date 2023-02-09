<?php 
//On définie la class Client
class Client{
    //On définie les attributs de la class
    private int $cin;
    private string $nom;
    private string $prenom;
    private int $tel;
//On initialise à l'aide de __construct
public function __construct(int $cin,string $nom,string $prenom,int $tel){
    $this->cin = $cin;
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->tel = $tel;
}    

//On définie les méthodes 
//La méthode d'affichage.
public function affichage():void{
    $cin = $this->getCin();
    $nom = $this->getNom();
    $prenom = $this->getPrenom();
    $tel = $this->getTel();
    $test = "Propriétaire du compte : \nCIN : $cin \nNom : $nom \n Prénom : $prenom\nTél : $tel\n";
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
     * Get the value of tel
     */ 
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set the value of tel
     *
     * @return  self
     */ 
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

}



?>