<?php
require_once 'Client.class.php';
class Compte
{
    private  $solde = 0;
    private static $code;
    private $numcompte;
    private Client $proprietaire;

    public function __construct($cin, $nom, $prenom, $tel){
        $this::$code++;
        $this->proprietaire = new Client($cin, $nom, $prenom, $tel);
        $this->numcompte = $this::$code;

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
    public function crediterCpt($somme,Compte $compte):void{
        $this->solde += $somme;
        $compte->solde -= $somme;
        echo "Opération bien effectué.\n";
    }
    //Method qui credite le compte avec une somme en parametre
    public function debiter($somme):void{
        $this->solde -= $somme;
        echo "Opération bien effectué.\n";
    }
    //Method qui credite le compte en prenant une somme et un compte en parametre
    public function debiterCpt($somme,Compte $compte):void{

        $this->solde -= $somme;
        $compte->solde += $somme;
        echo "Opération bien effectué.\n";
    }
    public function afficher(){
        $solde = $this->getSolde();
        $code = $this->getCode();
        $client = $this->getProprietaire();

        echo "********************************\n";
        echo "Numero de compte : $code\n";
        echo "Solde: $solde\n";
        echo "proprietaire du compte : \n";
        $client->afficher();

    }

    public function nbrCompte(){
        $compte = Compte::$code;
        echo "Le nombre de compte crées: $compte";
    }
}