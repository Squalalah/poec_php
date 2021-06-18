<?php

class Intervenant {
    private string $nom;
    private float $tauxHoraire;

    /**
     * Intervenant constructor.
     * @param string $nom
     * @param float $tauxHoraire
     */
    public function __construct(string $nom, float $tauxHoraire)
    {
        $this->nom = $nom;
        $this->tauxHoraire = $tauxHoraire;
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
     * @return float
     */
    public function getTauxHoraire(): float
    {
        return $this->tauxHoraire;
    }

    /**
     * @param float $tauxHoraire
     */
    public function setTauxHoraire(float $tauxHoraire): void
    {
        $this->tauxHoraire = $tauxHoraire;
    }


}