<?php
require_once('Etape.php');

class MiniExcursion {
    protected int $numMiniExcursion;
    protected static int $totalMiniExcursion = 0;
    protected string $libelleMiniExcursion;
    protected int $nombrePlaces;
    protected $lesEtapes; //Je ne donne pas le type 'Etape' à cette variable pour me faciliter l'exercice

    public function __construct(string $libelleMiniExcursion, int $nombrePlaces, $lesEtapes)
    {
        self::$totalMiniExcursion++;
        $this->numMiniExcursion = self::$totalMiniExcursion;
        $this->libelleMiniExcursion = $libelleMiniExcursion;
        $this->nombrePlaces = $nombrePlaces;
        $this->lesEtapes = $lesEtapes;
    }

    public function getNumMiniExcursion(): int
    {
        return $this->numMiniExcursion;
    }

    public function getLibelleMiniExcursion(): string
    {
        return $this->libelleMiniExcursion;
    }

    public function getNombrePlaces(): int
    {
        return $this->nombrePlaces;
    }

    public function setLibelleMiniExcursion(string $libelleMiniExcursion): void
    {
        $this->libelleMiniExcursion = $libelleMiniExcursion;
    }

    public function setNombrePlaces(int $nombrePlaces): void
    {
        $this->nombrePlaces = $nombrePlaces;
    }

    public function ajouteEtape(Etape $uneEtape)
    {
        $this->lesEtapes[] = $uneEtape;
        $uneEtape->setMiniExcursion($this); //J'attribue à l'étape son objet Excursion ($this) car une étape n'a qu'une seule excursion
    }

    public function __destruct() // Je détruis toutes les étapes instanciés dans $lesEtapes quand je détruis l'excursion
    {
        foreach($this->lesEtapes as $etape)
        {
            unset($etape);
        }
    }

    public function donneDureePrevue() : int
    {
        $total = 0;
        /* @var $etape Etape */ //Cette ligne permet à mon IDE de reconnaitre '$etape' comme étant un Objet Etape, cela peut ne pas fonctionner sur VS CODE
        foreach($this->lesEtapes as $etape)
        {
            $total += $etape->getDureeprevue();
            //A chaque objet Etape dans '$lesEtapes', j'insère leur durée dans $total pour compter le total de durée de toutes les étapes
        }
        return $total;
    }

    public function donneDureePrevueHHMM() : string
    {
        $total = $minute = $heure = 0; // Permet de donner '0' à toute une série de variable
        /* @var $etape Etape */
        foreach($this->lesEtapes as $etape)
        {
            $total += $etape->getDureeprevue();
        }
        $heure = floor($total/60); // Permet de récupérer le nombre d'heures, "floor()" simplifie à l'entier le plus bas.
        $minute = floor($total%60); // Permet de récupérer le nombre de minutes (on récupère le reste de la division)
        #region Cliquer ici pour un exemple concret
        // EXEMPLE avec 70 -> floor(70/60) = 1 car c'est l'entier le plus bas de la division.
        // 70 % 60 = 10 car il reste 10 dans la division
        // La conversion donne donc 1h10
        #endregion

        return $heure.'h'.$minute.'min';
    }


    #region fonctions non-utilisés/non-demandés dans l'exercice

    public function setNumMiniExcursion(int $numMiniExcursion): void
    {
        $this->numMiniExcursion = $numMiniExcursion;
    }

    public static function getTotalMiniExcursion(): int
    {
        return self::$totalMiniExcursion;
    }

    public static function setTotalMiniExcursion(int $totalMiniExcursion): void
    {
        self::$totalMiniExcursion = $totalMiniExcursion;
    }

    public function getLesEtapes()
    {
        return $this->lesEtapes;
    }

    public function setLesEtapes($lesEtapes): void
    {
        $this->lesEtapes = $lesEtapes;
    }
    #endregion



}