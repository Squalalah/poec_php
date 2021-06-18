<?php

class Adherent {
    private int $numAdherent;
    private string $nomAdherent;
    private string $prenomAdherent;
    private string $adresseAdherent;
    private string $cp_adherent;
    private string $villeAdherent;
    private string $telAdherent;

    /**
     * Adherent constructor.
     * @param int $numAdherent
     * @param string $nomAdherent
     * @param string $prenomAdherent
     * @param string $adresseAdherent
     * @param string $cp_adherent
     * @param string $villeAdherent
     * @param string $telAdherent
     */
    public function __construct(string $nomAdherent, string $prenomAdherent, string $adresseAdherent, string $cp_adherent, string $villeAdherent, string $telAdherent, int $numAdherent = -1)
    {
        $this->numAdherent = $numAdherent;
        $this->nomAdherent = $nomAdherent;
        $this->prenomAdherent = $prenomAdherent;
        $this->adresseAdherent = $adresseAdherent;
        $this->cp_adherent = $cp_adherent;
        $this->villeAdherent = $villeAdherent;
        $this->telAdherent = $telAdherent;
    }


    public function getInfos()
    {
        return "Adherent[id=".$this->numAdherent.",nom=".$this->nomAdherent.",prenom=".$this->prenomAdherent.",adresse=".$this->adresseAdherent.",cp=".$this->cp_adherent.",ville=".$this->villeAdherent.",tel=".$this->telAdherent."]";
    }

    /**
     * @return int
     */
    public function getNumAdherent(): int
    {
        return $this->numAdherent;
    }

    /**
     * @param int $numAdherent
     */
    public function setNumAdherent(int $numAdherent): void
    {
        $this->numAdherent = $numAdherent;
    }

    /**
     * @return string
     */
    public function getNomAdherent(): string
    {
        return $this->nomAdherent;
    }

    /**
     * @param string $nomAdherent
     */
    public function setNomAdherent(string $nomAdherent): void
    {
        $this->nomAdherent = $nomAdherent;
    }

    /**
     * @return string
     */
    public function getPrenomAdherent(): string
    {
        return $this->prenomAdherent;
    }

    /**
     * @param string $prenomAdherent
     */
    public function setPrenomAdherent(string $prenomAdherent): void
    {
        $this->prenomAdherent = $prenomAdherent;
    }

    /**
     * @return string
     */
    public function getAdresseAdherent(): string
    {
        return $this->adresseAdherent;
    }

    /**
     * @param string $adresseAdherent
     */
    public function setAdresseAdherent(string $adresseAdherent): void
    {
        $this->adresseAdherent = $adresseAdherent;
    }

    /**
     * @return string
     */
    public function getCpAdherent(): string
    {
        return $this->cp_adherent;
    }

    /**
     * @param string $cp_adherent
     */
    public function setCpAdherent(string $cp_adherent): void
    {
        $this->cp_adherent = $cp_adherent;
    }

    /**
     * @return string
     */
    public function getVilleAdherent(): string
    {
        return $this->villeAdherent;
    }

    /**
     * @param string $villeAdherent
     */
    public function setVilleAdherent(string $villeAdherent): void
    {
        $this->villeAdherent = $villeAdherent;
    }

    /**
     * @return string
     */
    public function getTelAdherent(): string
    {
        return $this->telAdherent;
    }

    /**
     * @param string $telAdherent
     */
    public function setTelAdherent(string $telAdherent): void
    {
        $this->telAdherent = $telAdherent;
    }





}