<?php
require_once('MiniExcursion.php');

class MiniExcursionPayante extends MiniExcursion {
    //Classe qui hérite de MiniExcursion
    private int $tarif;

    public function __construct(string $libelleMiniExcursion, int $nombrePlaces, $lesEtapes, int $tarif)
    {
        parent::__construct($libelleMiniExcursion, $nombrePlaces, $lesEtapes);
        $this->tarif = $tarif;
    }

    public function getTarif() : int
    {
        return $this->tarif;
    }

    public function setTarif($tarif): void
    {
        $this->tarif = $tarif;
    }

}