<?php

class Auteur {
    private int $numAuteur;
    private string $nomAuteur;
    private string $prenomAuteur;

    /**
     * Auteur constructor.
     * @param int $numAuteur
     * @param string $nomAuteur
     * @param string $prenomAuteur
     */
    public function __construct(string $nomAuteur, string $prenomAuteur, int $numAuteur = -1)
    {
        $this->nomAuteur = $nomAuteur;
        $this->prenomAuteur = $prenomAuteur;
        $this->numAuteur = $numAuteur;
    }

    public function getInfos()
    {
        return "Auteur[id=".$this->numAuteur.",prenom=".$this->prenomAuteur.",nom=".$this->nomAuteur."]";
    }

    /**
     * @return int
     */
    public function getNumAuteur(): int
    {
        return $this->numAuteur;
    }

    /**
     * @param int $numAuteur
     */
    public function setNumAuteur(int $numAuteur): void
    {
        $this->numAuteur = $numAuteur;
    }

    /**
     * @return string
     */
    public function getNomAuteur(): string
    {
        return $this->nomAuteur;
    }

    /**
     * @param string $nomAuteur
     */
    public function setNomAuteur(string $nomAuteur): void
    {
        $this->nomAuteur = $nomAuteur;
    }

    /**
     * @return string
     */
    public function getPrenomAuteur(): string
    {
        return $this->prenomAuteur;
    }

    /**
     * @param string $prenomAuteur
     */
    public function setPrenomAuteur(string $prenomAuteur): void
    {
        $this->prenomAuteur = $prenomAuteur;
    }




}