<?php
require_once('Etape.php');

class MiniExcursion {
    protected int $numMiniExcursion;
    protected static int $totalMiniExcursion = 0;
    protected string $libelleMiniExcursion;
    protected int $nombrePlaces;
    protected $lesEtapes;

    /**
     * MiniExcursion constructor.
     * @param string $libelleMiniExcursion
     * @param int $nombrePlaces
     **/
    public function __construct(string $libelleMiniExcursion, int $nombrePlaces, $lesEtapes)
    {
        self::$totalMiniExcursion++;
        $this->numMiniExcursion = self::$totalMiniExcursion;
        $this->libelleMiniExcursion = $libelleMiniExcursion;
        $this->nombrePlaces = $nombrePlaces;
        $this->lesEtapes = $lesEtapes;
    }

    public function __destruct()
    {
        foreach($this->lesEtapes as $etape)
        {
            unset($etape);
        }
    }

    public function donneDureePrevue() : int
    {
        $total = 0;
        /* @var $etape Etape */
        foreach($this->lesEtapes as $etape)
        {
            $total += $etape->getDureeprevue();
        }
        return $total;
    }

    public function donneDureePrevueHHMM() : string {
        $minute = 0;
        $heure = 0;
        $total = 0;
        /* @var $etape Etape */
        foreach($this->lesEtapes as $etape)
        {
            $total += $etape->getDureeprevue();
        }
        $heure = floor($total/60);
        $minute = floor($total%60);
        return 'total prévue : '.$heure.'h'.$minute.'min';
    }

    public function ajouteEtape(Etape $uneEtape)
    {
        $this->lesEtapes[] = $uneEtape;
        $uneEtape->setMiniExcursion($this);
    }

    /**
     * @return int
     */
    public function getNumMiniExcursion(): int
    {
        return $this->numMiniExcursion;
    }

    /**
     * @param int $numMiniExcursion
     */
    public function setNumMiniExcursion(int $numMiniExcursion): void
    {
        $this->numMiniExcursion = $numMiniExcursion;
    }

    /**
     * @return int
     */
    public static function getTotalMiniExcursion(): int
    {
        return self::$totalMiniExcursion;
    }

    /**
     * @param int $totalMiniExcursion
     */
    public static function setTotalMiniExcursion(int $totalMiniExcursion): void
    {
        self::$totalMiniExcursion = $totalMiniExcursion;
    }

    /**
     * @return string
     */
    public function getLibelleMiniExcursion(): string
    {
        return $this->libelleMiniExcursion;
    }

    /**
     * @param string $libelleMiniExcursion
     */
    public function setLibelleMiniExcursion(string $libelleMiniExcursion): void
    {
        $this->libelleMiniExcursion = $libelleMiniExcursion;
    }

    /**
     * @return int
     */
    public function getNombrePlaces(): int
    {
        return $this->nombrePlaces;
    }

    /**
     * @param int $nombrePlaces
     */
    public function setNombrePlaces(int $nombrePlaces): void
    {
        $this->nombrePlaces = $nombrePlaces;
    }

    /**
     * @return mixed
     */
    public function getLesEtapes()
    {
        return $this->lesEtapes;
    }

    /**
     * @param mixed $lesEtapes
     */
    public function setLesEtapes($lesEtapes): void
    {
        $this->lesEtapes = $lesEtapes;
    }



}