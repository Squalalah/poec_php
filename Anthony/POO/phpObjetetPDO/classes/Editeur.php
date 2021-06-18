<?php

class Editeur {
    private int $numEditeur;
    private string $nomEditeur;

    /**
     * Auteur constructor.
     * @param int $numEditeur
     * @param string $nomEditeur
     */
    public function __construct(string $nomEditeur, int $numEditeur = -1)
    {
        $this->nomEditeur = $nomEditeur;
        $this->numEditeur = $numEditeur;
    }

    public function getInfos()
    {
        return "Editeur[id=".$this->numEditeur.",nom=".$this->nomEditeur."]";
    }

    /**
     * @return int
     */
    public function getNumEditeur(): int
    {
        return $this->numEditeur;
    }

    /**
     * @param int $numEditeur
     */
    public function setNumEditeur(int $numEditeur): void
    {
        $this->numEditeur = $numEditeur;
    }

    /**
     * @return string
     */
    public function getNomEditeur(): string
    {
        return $this->nomEditeur;
    }

    /**
     * @param string $nomEditeur
     */
    public function setNomEditeur(string $nomEditeur): void
    {
        $this->nomEditeur = $nomEditeur;
    }





}