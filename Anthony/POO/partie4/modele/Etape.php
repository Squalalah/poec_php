<?php
require_once('MiniExcursion.php');

class Etape {
    private static int $totalnumEtape = 0;
    private int $numEtape;
    private string $description;
    private int $dureeprevue;
    private MiniExcursion $miniExcursion;

    /**
     * Etape constructor.
     * @param string $description
     * @param int $dureeprevue
     */
    public function __construct(string $description, int $dureeprevue)
    {
        self::$totalnumEtape++;
        $this->numEtape = self::$totalnumEtape;
        $this->description = $description;
        $this->dureeprevue = $dureeprevue;
    }

    public function donneDureePrevueHHMM() : string {
        $heure = 0;
        $minute = 0;
        $heure = floor($this->dureeprevue/60);
        $minute = $this->dureeprevue%60;
        return $heure.'h'.$minute.'min';
    }

    /**
     * @return int
     */
    public static function getTotalnumEtape(): int
    {
        return self::$totalnumEtape;
    }

    /**
     * @param int $totalnumEtape
     */
    public static function setTotalnumEtape(int $totalnumEtape): void
    {
        self::$totalnumEtape = $totalnumEtape;
    }

    /**
     * @return int
     */
    public function getNumEtape(): int
    {
        return $this->numEtape;
    }

    /**
     * @param int $numEtape
     */
    public function setNumEtape(int $numEtape): void
    {
        $this->numEtape = $numEtape;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getDureeprevue(): int
    {
        return $this->dureeprevue;
    }

    /**
     * @param int $dureeprevue
     */
    public function setDureeprevue(int $dureeprevue): void
    {
        $this->dureeprevue = $dureeprevue;
    }

    /**
     * @return MiniExcursion
     */
    public function getMiniExcursion(): MiniExcursion
    {
        return $this->miniExcursion;
    }

    /**
     * @param MiniExcursion $miniExcursion
     */
    public function setMiniExcursion(MiniExcursion $miniExcursion): void
    {
        $this->miniExcursion = $miniExcursion;
    }




}
