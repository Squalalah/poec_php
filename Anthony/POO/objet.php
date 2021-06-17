<?php

class Stylo {
    private string $couleur;
    private int $numeroSerie;

    public function __construct(string $couleur)
    {
        $this->couleur=$couleur;
        $this->numeroSerie=rand();
    }

    public function getCouleur(): string
    {
        return $this->couleur;
    }

    public function setCouleur(string $couleur): void
    {
        $this->couleur = $couleur;
    }

    public function setNumeroSerie(int $numeroSerie): void
    {
        $this->numeroSerie = $numeroSerie;
    }

    public function getNumeroSerie(): int
    {
        return $this->numeroSerie;
    }

    public function infoStylo() : string {
        return 'Stylo n°'.$this->numeroSerie. ' de couleur '. $this->couleur;
    }
}

