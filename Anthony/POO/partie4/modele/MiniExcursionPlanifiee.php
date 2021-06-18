<?php
require_once('MiniExcursion.php');

class MiniExcursionPlanifiee {
    private string $heureDepart;
    private int $nbreInscrits;
    private $excursion;
    public function __construct($heureDepart, $nbreInscrits, $laMiniExcursion)
    {
        $this->heureDepart = $heureDepart;
        $this->nbreInscrits = $nbreInscrits;
        $this->excursion = $laMiniExcursion;
    }

    /**
     * @return string
     */
    public function getHeureDepart(): string
    {
        return $this->heureDepart;
    }

    /**
     * @param string $heureDepart
     */
    public function setHeureDepart(string $heureDepart): void
    {
        $this->heureDepart = $heureDepart;
    }

    /**
     * @return int
     */
    public function getNbreInscrits(): int
    {
        return $this->nbreInscrits;
    }

    /**
     * @param int $nbreInscrits
     */
    public function setNbreInscrits(int $nbreInscrits): void
    {
        $this->nbreInscrits = $nbreInscrits;
    }

    public function getExcursion()
    {
        return $this->excursion;
    }

    /**
     * @param MiniExcursion $excursion
     */
    public function setExcursion(MiniExcursion $excursion): void
    {
        $this->excursion = $excursion;
    }


    public function estComplete() : bool {
        if($this->nbreInscrits == $this->excursion->getNombrePlaces()) return true;
        return false;
    }
}
