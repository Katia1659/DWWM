<?php
class Etudiant
{
    //initailisation des attribut
    private static $_id;
    private string $_nom;
    private string $_prenom;
    private DateTime $_dateNaissance;
    private string $_libelle;


    //constructeur
    public function __construct(string $nom,string $prenom,string $date,string $libelle){
        Etudiant::$_id ++;
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_dateNaissance = new DateTime($date);
        $this->_libelle = $libelle;


    }

    //method tostring qui permettra l'affichage de l'objet
    public function __toString(){
        $nom = $this->_nom;
        $prenom = $this->_prenom;
        $dateNaissance = $this->_dateNaissance->format('d-m-Y');
        $string = "Je suis $nom $prenom . Je suis né(e) en $dateNaissance \n";
        return $string;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->_id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->_id = $id;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->_nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->_nom = $nom;
    }

    /**
     * @return string
     */
    public function getPrenom(): string
    {
        return $this->_prenom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom(string $prenom): void
    {
        $this->_prenom = $prenom;
    }

    /**
     * @return DateTime
     */
    public function getDates(): DateTime
    {
        return $this->_dates;
    }

    /**
     * @param DateTime $dates
     */
    public function setDates(DateTime $dates): void
    {
        $this->_dates = $dates;
    }

    /**
     * @return string
     */
    public function getLibelle(): string
    {
        return $this->_libelle;
    }


}