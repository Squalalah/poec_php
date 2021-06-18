<?php
require_once('IFormatage.php');

class PersonneIF implements IFormatage {
    private string $nom;
    private string $dateNaissance;
    private string $salaire;

    /**
     * PersonneIF constructor.
     * @param string $nom
     * @param string $dateNaissance
     * @param string $salaire
     */
    public function __construct(string $nom, string $dateNaissance, string $salaire)
    {
        $this->nom = $this->formatageChaine($nom);
        $this->dateNaissance = $dateNaissance;
        $this->salaire = $this->formatageNombre($salaire);
    }

    public function formatageChaine($chaine) : string{
        return strtoupper($chaine);
    }
    public function formatageNombre($nombre): string {
        return number_format($nombre, 2, ",", " ");
    }

    public function getInfos() : string {
        return $this->nom.' Salaire: '.$this->salaire.' euros';
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
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
     * @return int
     */
    public function getSalaire(): int
    {
        return $this->salaire;
    }

    /**
     * @param int $salaire
     */
    public function setSalaire(int $salaire): void
    {
        $this->salaire = $salaire;
    }
}