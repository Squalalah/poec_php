<?php



class Voiture {
    private string $numSerie, $marque, $modele;
    private int $annee, $kilometrage;
    private string $typeCarburant, $typeBoiteVitesse, $couleur;
    private static int $nbVoiture = 0;

    public function __construct(string $marque, string $modele, int $annee, int $kilometrage, string $typeCarburant, string $typeBoiteVitesse, string $couleur = 'Blanche')
    {
        $this->numSerie = 'A'.self::$nbVoiture;
        self::$nbVoiture++;
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
        $this->kilometrage = $kilometrage;
        $this->typeCarburant = $typeCarburant;
        $this->typeBoiteVitesse = $typeBoiteVitesse;
        $this->couleur = $couleur;
    }

    #region getter/setter
    /**
     * @return string
     */
    public function getNumSerie(): string
    {
        return $this->numSerie;
    }

    /**
     * @param string $numSerie
     */
    public function setNumSerie(string $numSerie): void
    {
        $this->numSerie = $numSerie;
    }

    /**
     * @return string
     */
    public function getMarque(): string
    {
        return $this->marque;
    }

    /**
     * @param string $marque
     */
    public function setMarque(string $marque): void
    {
        $this->marque = $marque;
    }

    /**
     * @return string
     */
    public function getModele(): string
    {
        return $this->modele;
    }

    /**
     * @param string $modele
     */
    public function setModele(string $modele): void
    {
        $this->modele = $modele;
    }

    /**
     * @return int
     */
    public function getAnnee(): int
    {
        return $this->annee;
    }

    /**
     * @param int $annee
     */
    public function setAnnee(int $annee): void
    {
        $this->annee = $annee;
    }

    /**
     * @return int
     */
    public function getKilometrage(): int
    {
        return $this->kilometrage;
    }

    /**
     * @param int $kilometrage
     */
    public function setKilometrage(int $kilometrage): void
    {
        $this->kilometrage = $kilometrage;
    }

    /**
     * @return string
     */
    public function getTypeCarburant(): string
    {
        return $this->typeCarburant;
    }

    /**
     * @param string $typeCarburant
     */
    public function setTypeCarburant(string $typeCarburant): void
    {
        $this->typeCarburant = $typeCarburant;
    }

    /**
     * @return string
     */
    public function getTypeBoiteVitesse(): string
    {
        return $this->typeBoiteVitesse;
    }

    /**
     * @param string $typeBoiteVitesse
     */
    public function setTypeBoiteVitesse(string $typeBoiteVitesse): void
    {
        $this->typeBoiteVitesse = $typeBoiteVitesse;
    }

    /**
     * @return string
     */
    public function getCouleur(): string
    {
        return $this->couleur;
    }

    /**
     * @param string $couleur
     */
    public function setCouleur(string $couleur): void
    {
        $this->couleur = $couleur;
    }
    #endregion

    public function getInfos() : string {
        return $this->numSerie.' '.$this->marque.' '.$this->modele.' '.$this->annee.' '.$this->kilometrage.' '.$this->typeCarburant.' '.$this->typeBoiteVitesse.' '.$this->couleur;
    }

}