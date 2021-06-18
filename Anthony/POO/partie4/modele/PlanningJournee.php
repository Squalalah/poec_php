<?php

require_once('MiniExcursionPlanifiee.php');

class PlanningJournee {
    private string $date;
    private $lesMiniExcursionsPlanifiees;

    /**
     * PlanningJournee constructor.
     * @param string $date
     * @param $lesMiniExcursionsPlanifiees
     */
    public function __construct(string $date, $lesMiniExcursionsPlanifiees)
    {
        $this->date = $date;
        $this->lesMiniExcursionsPlanifiees = $lesMiniExcursionsPlanifiees;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate(string $date): void
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getLesMiniExcursionsPlanifiees()
    {
        return $this->lesMiniExcursionsPlanifiees;
    }

    /**
     * @param mixed $lesMiniExcursionsPlanifiees
     */
    public function setLesMiniExcursionsPlanifiees($lesMiniExcursionsPlanifiees): void
    {
        $this->lesMiniExcursionsPlanifiees = $lesMiniExcursionsPlanifiees;
    }




}