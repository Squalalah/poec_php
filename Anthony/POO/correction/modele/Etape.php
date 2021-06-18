<?php
require_once('MiniExcursion.php');

class Etape {
    private static int $totalnumEtape = 0;
    private int $numEtape;
    private string $description;
    private int $dureeprevue;
    private MiniExcursion $miniExcursion; //permet de stocker l'excursion, qui lui sera attribué une fois l'étape lié à celui-ci.

    public function __construct(string $description, int $dureeprevue)
    {
        self::$totalnumEtape++;
        $this->numEtape = self::$totalnumEtape;
        $this->description = $description;
        $this->dureeprevue = $dureeprevue;
    }

    public function getNumEtape(): int
    {
        return $this->numEtape;
    }

    public function getDescription(): string //équivalent de getDescriptionPrevue()
    {
        return $this->description;
    }

    public function donneDureePrevueHHMM() : string {
        $heure = $minute = 0; //Permet d'assigner '0' a plusieurs variables en meme temps

        $heure = floor($this->dureeprevue/60); // Permet de récupérer le nombre d'heures, "floor()" simplifie à l'entier le plus bas.
        $minute = $this->dureeprevue%60; // Permet de récupérer le nombre de minutes (on récupère le reste de la division)
        #region Cliquer ici pour un exemple concret
        // EXEMPLE avec 70 -> floor(70/60) = 1 car c'est l'entier le plus bas de la division.
        // 70 % 60 = 10 car il reste 10 dans la division
        // La conversion donne donc 1h10
        #endregion
        return $heure.'h'.$minute.'min';
    }

    public function getDureeprevue(): int
    {
        return $this->dureeprevue;
    }

    public static function getTotalnumEtape(): int //équivalent de getNbreEtape()
    {
        return self::$totalnumEtape;
    }

    public function setDescription(string $description): void //équivalent de setDescriptionPrevue($dureePrevue)
    {
        $this->description = $description;
    }

    public function setMiniExcursion(MiniExcursion $miniExcursion): void
    {
        $this->miniExcursion = $miniExcursion;
    }

    #region Fonctions non-utilisés/non-demandés par l'exercice

    public static function setTotalnumEtape(int $totalnumEtape): void
    {
        self::$totalnumEtape = $totalnumEtape;
    }

    public function setNumEtape(int $numEtape): void
    {
        $this->numEtape = $numEtape;
    }

    public function setDureeprevue(int $dureeprevue): void
    {
        $this->dureeprevue = $dureeprevue;
    }

    public function getMiniExcursion(): MiniExcursion
    {
        return $this->miniExcursion;
    }

    #endregion



}
