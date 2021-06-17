<?php

require_once('Artiste.php');

class Acteur extends Artiste {

    private int $nbFilmJoue;
    private int $cachet;

    /**
     * Acteur constructor.
     * @param int $nbFilmJoue
     * @param int $cachet
     */
    public function __construct(string $prenom, string $nom, int $nbFilmJoue, int $cachet)
    {
        parent::__construct($prenom, $nom);
        $this->nbFilmJoue = $nbFilmJoue;
        $this->cachet = $cachet;
    }

    /**
     * @return int
     */
    public function getNbFilmJoue(): int
    {
        return $this->nbFilmJoue;
    }

    /**
     * @param int $nbFilmJoue
     */
    public function setNbFilmJoue(int $nbFilmJoue): void
    {
        $this->nbFilmJoue = $nbFilmJoue;
    }

    /**
     * @return int
     */
    public function getCachet(): int
    {
        return $this->cachet;
    }

    /**
     * @param int $cachet
     */
    public function setCachet(int $cachet): void
    {
        $this->cachet = $cachet;
    }



}
