<?php
require_once('MiniExcursion.php');

class MiniExcursionPayante extends MiniExcursion {
    private $tarif;

    public function __construct(string $libelleMiniExcursion, int $nombrePlaces, $lesEtapes, $tarif)
    {
        parent::__construct($libelleMiniExcursion, $nombrePlaces, $lesEtapes);
        $this->tarif = $tarif;
    }

    /**
     * @return mixed
     */
    public function getTarif()
    {
        return $this->tarif;
    }

    /**
     * @param mixed $tarif
     */
    public function setTarif($tarif): void
    {
        $this->tarif = $tarif;
    }

}