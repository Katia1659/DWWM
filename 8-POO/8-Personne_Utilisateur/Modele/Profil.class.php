<?php
class Profil
{
    //Initalisation des attribut
    private static int $_compteur;
    private int $_id;
    private string $_code;
    private string $_libelle;

    //Construct
    public function __construct(string $code, string $libelle){
        $this::$_compteur++;
        $this->_id = $this::$_compteur;
        $this->_code = $code;
        $this->_libelle = $libelle;
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
