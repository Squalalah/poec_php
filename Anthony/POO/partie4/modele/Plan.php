<?php
require_once('Emplacement.php');

class Plan {
    private int $echelle;
    private string $nomFichier;
    private $lesEmplacements;

    /**
     * Plan constructor.
     * @param int $echelle
     * @param string $nomFichier
     */
    public function __construct(string $nomFichier)
    {
        $this->nomFichier = $nomFichier;
        $this->echelle = 0;
        $this->lesEmplacements = array();
    }

    public function ajouteEmplacement(Emplacement $emp) {
        $this->lesEmplacements[] = $emp;
        $emp->setPlan($this);
    }

    public function supprimeEmplacement(Emplacement $emp) {
        if (($key = array_search($emp, $this->lesEmplacements)) !== false) {
            unset($this->lesEmplacements[$key]);
        }
        unset($emp);
    }

    public function affiche() {
        $text = 'Echelle: '.$this->echelle.', nomFichier: '.$this->nomFichier.PHP_EOL;
        foreach($this->lesEmplacements as $emp)
        {
            $text .= '[dimension: '.$emp->getDimension().', couleur: '.$emp->getCouleur().', xCentre: '.$emp->getXCentre().', yCentre: '.$emp->getYCentre().']'.PHP_EOL;
        }
        return $text;
    }

    /**
     * @return mixed
     */
    public function getLesEmplacements()
    {
        return $this->lesEmplacements;
    }

    /**
     * @param mixed $lesEmplacements
     */
    public function setLesEmplacements($lesEmplacements): void
    {
        $this->lesEmplacements = $lesEmplacements;
    }

    /**
     * @return int
     */
    public function getEchelle(): int
    {
        return $this->echelle;
    }

    /**
     * @param int $echelle
     */
    public function setEchelle(int $echelle): void
    {
        $this->echelle = $echelle;
    }

    /**
     * @return string
     */
    public function getNomFichier(): string
    {
        return $this->nomFichier;
    }

    /**
     * @param string $nomFichier
     */
    public function setNomFichier(string $nomFichier): void
    {
        $this->nomFichier = $nomFichier;
    }

}