<?php

require_once('Plan.php');

Abstract class Emplacement {
    protected int $dimension;
    protected string $couleur;
    protected int $xCentre;
    protected int $yCentre;
    protected Plan $plan;
    abstract function affiche(): string;
    /**
     * Emplacement constructor.
     * @param int $dimension
     * @param int $couleur
     * @param int $xCentre
     * @param int $yCentre
     * @param Plan $plan
     */
    public function __construct(string $couleur, int $xCentre, int $yCentre)
    {
        $this->couleur = $couleur;
        $this->xCentre = $xCentre;
        $this->yCentre = $yCentre;
    }

    /**
     * @return int
     */
    public function getDimension(): int
    {
        return $this->dimension;
    }

    /**
     * @param int $dimension
     */
    public function setDimension(int $dimension): void
    {
        $this->dimension = $dimension;
    }

    public function getCouleur(): string
    {
        return $this->couleur;
    }

    public function setCouleur(string $couleur): void
    {
        $this->couleur = $couleur;
    }

    /**
     * @return int
     */
    public function getXCentre(): int
    {
        return $this->xCentre;
    }

    /**
     * @param int $xCentre
     */
    public function setXCentre(int $xCentre): void
    {
        $this->xCentre = $xCentre;
    }

    /**
     * @return int
     */
    public function getYCentre(): int
    {
        return $this->yCentre;
    }

    /**
     * @param int $yCentre
     */
    public function setYCentre(int $yCentre): void
    {
        $this->yCentre = $yCentre;
    }

    /**
     * @return Plan
     */
    public function getPlan(): Plan
    {
        return $this->plan;
    }

    /**
     * @param Plan $plan
     */
    public function setPlan(Plan $plan): void
    {
        $this->plan = $plan;
    }




}