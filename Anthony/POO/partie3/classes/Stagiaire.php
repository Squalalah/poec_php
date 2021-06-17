<?php
require_once('Individu.php');

class Stagiaire extends Individu {

    private string $dateNaissance;
    private string $adresse;
    private int $codePostal;
    private string $ville;
    /**
     * Stagiaire constructor.
     * @param string $dateNaissance
     * @param string $adresse
     * @param int $codePostal
     * @param string $ville
     */
    public function __construct(string $nom, string $prenom, int $telephone, string $dateNaissance, string $adresse, int $codePostal, string $ville)
    {
        parent::__construct($nom, $prenom, $telephone);
        $this->dateNaissance = $dateNaissance;
        $this->adresse = $adresse;
        $this->codePostal = $codePostal;
        $this->ville = $ville;
    }

    /**
     * @return string
     */
    public function getDateNaissance(): string
    {
        return $this->dateNaissance;
    }

    /**
     * @param string $dateNaissance
     */
    public function setDateNaissance(string $dateNaissance): void
    {
        $this->dateNaissance = $dateNaissance;
    }

    /**
     * @return string
     */
    public function getAdresse(): string
    {
        return $this->adresse;
    }

    /**
     * @param string $adresse
     */
    public function setAdresse(string $adresse): void
    {
        $this->adresse = $adresse;
    }

    /**
     * @return int
     */
    public function getCodePostal(): int
    {
        return $this->codePostal;
    }

    /**
     * @param int $codePostal
     */
    public function setCodePostal(int $codePostal): void
    {
        $this->codePostal = $codePostal;
    }

    /**
     * @return string
     */
    public function getVille(): string
    {
        return $this->ville;
    }

    /**
     * @param string $ville
     */
    public function setVille(string $ville): void
    {
        $this->ville = $ville;
    }

    public function infos(): string
    {
        return $this->getNom().' | '.$this->getPrenom().' | '.$this->getDateNaissance().' | '.$this->getAdresse().' | '.$this->getCodePostal().' | '.$this->getVille().' | '.$this->getTelephone();
    }


}