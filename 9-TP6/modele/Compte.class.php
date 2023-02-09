<?php
require_once 'Client.class.php';
class Compte
{
    private  float $solde = 0;
    private static $code;

    private int $numeroCompte;
    private Client $proprietaire;

    public function __construct(string $cin,string $nom,string $prenom,int $tel){
        $this::$code++;
        $this->numeroCompte = $this :: $code;
        $this->proprietaire = new Client($cin, $nom, $prenom, $tel);

    }

    /**
     * @return int
     */
    public function getNumeroCompte(): int
    {
        return $this->numeroCompte;
    }



    /**
     * @return mixed
     */
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * @return int
     */
    public function getCode(): int
    {
        return $this::$code;
    }

    /**
     * @return Client
     */
    public function getProprietaire(): Client
    {
        return $this->proprietaire;
    }

    /**
     * @param Client $proprietaire
     */
    public function setProprietaire(Client $proprietaire): void
    {
        $this->proprietaire = $proprietaire;
    }

    //Method qui credite le compte avec une somme en parametre
    public function crediter($somme):void{
        $this->solde += $somme;
        echo "Opération bien effectué.\n";
    }
    //Method qui credite le compte en prenant une somme et un compte en parametre
    public function crediterCpt(float $somme,Compte $compte):void{
        if ($compte -> solde < $somme){
            echo "L'operation n'a pas pu etre effectué, car le compte crediteur n'a pas le solde requis. \n";
        }else{
            $this->solde += $somme;
            $compte->solde -= $somme;
            echo "Opération bien effectué.\n";
        }

    }
    //Method qui credite le compte avec une somme en parametre
    public function debiter(float $somme):void{
        if ($this -> solde < $somme){
            echo "L'operation n'a pas pu etre effectué. \n";
        }else {
            $this->solde -= $somme;
            echo "Opération bien effectué.\n";
        }

    }
    //Method qui credite le compte en prenant une somme et un compte en parametre
    public function debiterCpt(float $somme,Compte $compte):void{
        if ($this -> solde < $somme){
            echo "L'operation n'a pas pu etre effectué, car le compte débiteur n'a pas le solde requis. \n";
        }else{
            $this->solde -= $somme;
            $compte->solde += $somme;
            echo "Opération bien effectué.\n";
        }
    }
    public function afficher(){
        $solde = $this->getSolde();
        $code = $this->numeroCompte;
        $client = $this->getProprietaire();

        echo " ————————————————————————————————\n";
        echo "│        Numero de compte :       \n";
        echo "│              $code              \n";
        echo " ————————————————————————————————\n";
        echo "│            SOLDE :             \n";
        echo "│              $solde              \n";
        echo " ————————————————————————————————\n";
        echo "proprietaire du compte : \n";
        $client->afficher();

    }

    public static function  afficherCompteCree(){
        $compte = self::$code;
        echo "Le nombre de compte crées: $compte";
    }
}