<?php
require_once('Artiste.php');


class Realisateur extends Artiste {

    private int $filmsRealiser;

    /**
     * Realisateur constructor.
     * @param int $filmsRealiser
     */
    public function __construct(string $prenom, string $nom, int $filmsRealiser)
    {
        parent::__construct($prenom, $nom);
        $this->filmsRealiser = $filmsRealiser;
    }

    /**
     * @return int
     */
    public function getFilmsRealiser(): int
    {
        return $this->filmsRealiser;
    }

    /**
     * @param int $filmsRealiser
     */
    public function setFilmsRealiser(int $filmsRealiser): void
    {
        $this->filmsRealiser = $filmsRealiser;
    }



}