<?php

class Stylo {
    private string $couleur;
    private int $numeroSerie;
    public function __construct(string $couleur)
    {
        $this->couleur=$couleur;
        $this->numeroSerie=rand();
    }
    public function infoStylo() : string {
        return 'Stylo n°'.$this->numeroSerie. ' de couleur '. $this->couleur;
    }
}

