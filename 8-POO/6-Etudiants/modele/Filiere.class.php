<?php
class Filiere
{
    //initailisation des attribut
    private static $_compteur;
    private int $_id;
    private string $_code;
    private string $_libelle;

    //construct
    public function __construct(string $code ,string $libelle){
        $this::$_compteur ++;
        $this->_id = $this::$_compteur;
        $this->_code = $code;
        $this->_libelle = $libelle;

    }
    //method tostring qui permettra l'affichage de l'objet
    public function __toString(){
        $libelle = $this->_libelle;
        return "Filiere ".$this->_id." :" . $libelle.PHP_EOL;
    }
    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->_code;
    }

    /**
     * @param string $code
     */
    public function setCode(string $code): void
    {
        $this->_code = $code;
    }

    /**
     * @return string
     */
    public function getLibelle(): string
    {
        return $this->_libelle;
    }

    /**
     * @param string $libelle
     */
    public function setLibelle(string $libelle): void
    {
        $this->_libelle = $libelle;
    }

}