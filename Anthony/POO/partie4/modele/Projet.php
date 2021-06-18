<?php

require_once('Mission.php');
class Projet {

    private string $nom;
    private dateTime $debut;
    private dateTime $fin;
    private float $prixFactureMO;
    private $lesMissions;

    /**
     * Projet constructor.
     * @param string $nom
     * @param dateTime $debut
     * @param dateTime $fin
     * @param float $prixFactureMO
    $input = '06/10/2011 19:00:02';
    $date = strtotime($input);
    echo date('d/M/Y h:i:s', $date);
     */
    public function __construct(string $nom, string $debut, string $fin, float $prixFactureMO, $lesMissions)
    {
        $this->nom = $nom;
        $this->debut = DateTime::createFromFormat('d/m/Y', $debut);
        $this->fin = DateTime::createFromFormat('d/m/Y', $fin);
        $this->prixFactureMO = $prixFactureMO;
        $this->lesMissions = $lesMissions;
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
     * @return dateTime
     */
    public function getDebut(): dateTime
    {
        return $this->debut;
    }

    /**
     * @param dateTime $debut
     */
    public function setDebut(dateTime $debut): void
    {
        $this->debut = $debut;
    }

    /**
     * @return dateTime
     */
    public function getFin(): dateTime
    {
        return $this->fin;
    }

    /**
     * @param dateTime $fin
     */
    public function setFin(dateTime $fin): void
    {
        $this->fin = $fin;
    }

    /**
     * @return float
     */
    public function getPrixFactureMO(): float
    {
        return $this->prixFactureMO;
    }

    /**
     * @param float $prixFactureMO
     */
    public function setPrixFactureMO(float $prixFactureMO): void
    {
        $this->prixFactureMO = $prixFactureMO;
    }

    /**
     * @return array
     */
    public function getLesMissions(): array
    {
        return $this->lesMissions;
    }

    /**
     * @param array $lesMissions
     */
    public function setLesMissions(array $lesMissions): void
    {
        $this->lesMissions = $lesMissions;
    }

    public function cumulCoutMo() : float {
        $totalCumulCout = 0;

        foreach($this->lesMissions as $key => $mission)
        {
            $totalHeure = $mission->nbHeuresEffectues();
            $taux = $mission->getExecutant()->getTauxHoraire();
            $totalCumulCout += $taux*$totalHeure;
        }
        return $totalCumulCout;
    }

    public function margeBruteCourante() : float {
        return $this->prixFactureMO - $this->cumulCoutMo();
    }


}