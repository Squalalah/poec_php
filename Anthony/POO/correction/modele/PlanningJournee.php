<?php

require_once('MiniExcursionPlanifiee.php');

class PlanningJournee {
    private string $date;
    private $lesMiniExcursionsPlanifiees; //Stocke un tableau d'objets 'ExcursionPlanifiee'

    public function __construct(string $date, $lesMiniExcursionsPlanifiees)
    {
        $this->date = $date;
        $this->lesMiniExcursionsPlanifiees = $lesMiniExcursionsPlanifiees;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function getLesMiniExcursionsPlanifiees()
    {
        return $this->lesMiniExcursionsPlanifiees;
    }

    public function setDate(string $date): void
    {
        $this->date = $date;
    }

    public function setLesMiniExcursionsPlanifiees($lesMiniExcursionsPlanifiees): void
    {
        $this->lesMiniExcursionsPlanifiees = $lesMiniExcursionsPlanifiees;
    }




}