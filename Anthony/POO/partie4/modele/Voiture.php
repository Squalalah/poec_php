<?php
require_once('Individu.php');
class Voiture {
    private int $numSerie;
    private string $immatriculation;
    private string $marque;
    private string $couleur;
    private int $annee;
    private Individu $proprietaire;

    /**
     * Voiture constructor.
     * @param int $num_serie
     * @param string $immatriculation
     * @param string $marque
     * @param string $couleur
     * @param int $annee
     * @param Individu $proprietaire
     */
    public function __construct(int $num_serie, string $immatriculation, string $marque, string $couleur, int $annee, Individu $proprietaire)
    {
        $this->numSerie = $num_serie;
        $this->immatriculation = $immatriculation;
        $this->marque = $marque;
        $this->couleur = $couleur;
        $this->annee = $annee;
        $this->proprietaire = $proprietaire;
    }

    public function demarrer() {

    }

    public function klaxonner() {

    }

    public function conduire() {

    }

    public function arreter() {

    }

    public function getInfos() {
        $text = 'Num série: '.$this->numSerie.', Immatriculation: '.$this->immatriculation.', Marque: '.$this->marque.', Couleur: '.$this->couleur.', Année: '.$this->annee;
        if($this->proprietaire != null) $text .= ', Propriétaire: '.$this->proprietaire->getNom().' '.$this->proprietaire->getPrenom();
        return $text;
    }
    /**
     * @return int
     */
    public function getNumSerie(): int
    {
        return $this->numSerie;
    }

    /**
     * @param int $numSerie
     */
    public function setNumSerie(int $numSerie): void
    {
        $this->numSerie = $numSerie;
    }

    /**
     * @return string
     */
    public function getImmatriculation(): string
    {
        return $this->immatriculation;
    }

    /**
     * @param string $immatriculation
     */
    public function setImmatriculation(string $immatriculation): void
    {
        $this->immatriculation = $immatriculation;
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
     * @return Individu|null
     */
    public function getProprietaire(): ?Individu
    {
        return $this->proprietaire;
    }

    /**
     * @param Individu|null $proprietaire
     */
    public function setProprietaire(?Individu $proprietaire): void
    {
        $this->proprietaire = $proprietaire;
    }


}