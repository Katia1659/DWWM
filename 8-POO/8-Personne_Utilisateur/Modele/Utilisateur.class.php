<?php
require_once 'Personne.class.php';
class Utilisateur extends Personne
{
    //initialisation des attributs
    private string $_login;
    private string $_password;
    private string $_service;

    //construct
    public function __construct(string $login,
                                string $password,
                                string $service,
                                string $nom,
                                string $prenom,
                                string $mail,
                                string $tel,
                                float $salaire,
                                Profil $profil = null)
    {
        $this->_login = $login;
        $this->_password = $password;
        $this->_service = $service;
        parent::__construct($nom, $prenom, $mail, $tel, $salaire);
        if ($profil !== null){
            $this->_profil = $profil;
        } else {
            $this->_profil = $profil;
        }

    }

    public function calculerSalaire(): void
    {
        $status = is_null($this->_profil);
        if($status === false){
            $libelle = $this->_profil->getLibelle();
            if ($libelle === 'DG' || $libelle=== 'Directeur général'){
                $this->salaire *= 1.40;
            }elseif($libelle === 'MN' || $libelle === 'Manager'){
                $this->salaire *= 1.10;
            }
        }
    }
    public function afficher(): void
    {
        $login = $this->_login;
        $service = $this->_service;
        parent::afficher();
        echo "mon login : $login, service : $service. ";
        $status = is_null($this->_profil);
        if ($status === false) {
            $libelle = $this->_profil->getLibelle();
            echo "Je suis $libelle.\n";
        }else{
            echo "\n";

    }

    }

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->_login;
    }

    /**
     * @param string $login
     */
    public function setLogin(string $login): void
    {
        $this->_login = $login;
    }

    /**
     * @return string
     */
    public function getService(): string
    {
        return $this->_service;
    }

    /**
     * @param string $service
     */
    public function setService(string $service): void
    {
        $this->_service = $service;
    }

    /**
     * @return Profil
     */
    public function getProfil(): Profil
    {
        return $this->_profil;
    }

    /**
     * @param Profil $profil
     */
    public function setProfil(Profil $profil): void
    {
        $this->_profil = $profil;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->_password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->_password = $password;
    }



}
