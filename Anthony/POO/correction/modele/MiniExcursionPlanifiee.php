<?php
require_once('MiniExcursion.php');

class MiniExcursionPlanifiee {
    private string $heureDepart;
    private int $nbreInscrits;
    private $excursion;//Je ne donne pas le type 'Etape' à cette variable pour me faciliter l'exercice

    public function __construct($heureDepart, $nbreInscrits, $laMiniExcursion)
    {
        $this->heureDepart = $heureDepart;
        $this->nbreInscrits = $nbreInscrits;
        $this->excursion = $laMiniExcursion;
    }

    public function estComplete() : bool {
        if($this->nbreInscrits == $this->excursion->getNombrePlaces()) return true;
        //si le nbInscrits à cette excursion = nombre de place disponible dans l'excursion enregistrée
        return false;
    }

    public function getHeureDepart(): string
    {
        return $this->heureDepart;
    }

    public function getNbreInscrits(): int
    {
        return $this->nbreInscrits;
    }

    public function getExcursion()
    {
        return $this->excursion;
    } //Equivalent de getLaminiExcursion()

    public function setHeureDepart(string $heureDepart): void
    {
        $this->heureDepart = $heureDepart;
    }

    public function setNbreInscrits(int $nbreInscrits): void
    {
        $this->nbreInscrits = $nbreInscrits;
    }

    public function setExcursion(MiniExcursion $excursion): void
    {
        $this->excursion = $excursion;
    } //Equivalent de setLaminiExcursion($laminiExcursion)
}
