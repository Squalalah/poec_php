<?php
require_once("Individu.php");
class Formateur extends Individu
{

    private int $numeroIntervenant;
    private string $dateDeCreation;
    private static int $nombreIntervenant = 0;

    /**
     * Formateur constructor.
     * @param int $telephone
     * @param int $numeroIntervenant
     * @param string $dateDeCreation
     */
    public function __construct(string $nom, string $prenom, int $telephone, int $numeroIntervenant, string $dateDeCreation)
    {
        parent::__construct($nom, $prenom, $telephone);
        self::$nombreIntervenant++;
        $this->numeroIntervenant = $numeroIntervenant;
        $this->dateDeCreation = $dateDeCreation;
    }

    public function infos() : string {
        return $this->getNom().' | '.$this->getPrenom().' | '.$this->getTelephone().' | '.$this->getNumeroIntervenant().' | '.$this->getDateDeCreation();
    }


    /**
     * @return int
     */
    public function getNumeroIntervenant(): int
    {
        return $this->numeroIntervenant;
    }

    /**
     * @param int $numeroIntervenant
     */
    public function setNumeroIntervenant(int $numeroIntervenant): void
    {
        $this->numeroIntervenant = $numeroIntervenant;
    }

    /**
     * @return string
     */
    public function getDateDeCreation(): string
    {
        return $this->dateDeCreation;
    }

    /**
     * @param string $dateDeCreation
     */
    public function setDateDeCreation(string $dateDeCreation): void
    {
        $this->dateDeCreation = $dateDeCreation;
    }

    /**
     * @return mixed
     */
    public static function getNombreIntervenant() : int
    {
        return self::$nombreIntervenant;
    }

    /**
     * @param mixed $nombreIntervenant
     */
    public static function setNombreIntervenant($nombreIntervenant): void
    {
        self::$nombreIntervenant = $nombreIntervenant;
    }



}
