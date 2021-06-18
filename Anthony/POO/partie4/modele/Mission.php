<?php
require_once('Intervenant.php');

class Mission {

    private string $nom;
    private string $description;
    private int $nbHeuresPrevues;
    private Intervenant $Executant;
    private array $releveHoraire;

    /**
     * Mission constructor.
     * @param string $nom
     * @param string $description
     * @param int $nbHeuresPrevues
     * @param Intervenant $Executant
     * @param array $releveHoraire
     */
    public function __construct(string $nom, string $description, int $nbHeuresPrevues, Intervenant $Executant)
    {
        $this->nom = $nom;
        $this->description = $description;
        $this->nbHeuresPrevues = $nbHeuresPrevues;
        $this->Executant = $Executant;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
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
    public function getNbHeuresPrevues(): int
    {
        return $this->nbHeuresPrevues;
    }

    /**
     * @param int $nbHeuresPrevues
     */
    public function setNbHeuresPrevues(int $nbHeuresPrevues): void
    {
        $this->nbHeuresPrevues = $nbHeuresPrevues;
    }

    /**
     * @return Intervenant
     */
    public function getExecutant(): Intervenant
    {
        return $this->Executant;
    }

    /**
     * @param Intervenant $Executant
     */
    public function setExecutant(Intervenant $Executant): void
    {
        $this->Executant = $Executant;
    }

    /**
     * @return array
     */
    public function getReleveHoraire(): array
    {
        return $this->releveHoraire;
    }

    public function ajoutReleve(string $laDate, int $nbreHeures) {
        $this->releveHoraire[$laDate] = $nbreHeures;
    }

    public function nbHeuresEffectues() : int{
        $total = 0;
        foreach($this->releveHoraire AS $releve)
        {
            $total += $releve;
        }
        return $total;
    }
}