<?php

require_once("Individu.php");
class Salarie extends Individu
{
    private $_salaire;

    public function __construct($nom, $prenom, $salaire) {
        parent::__construct($nom, $prenom);
        $this->setSalaire($salaire);
    }


    /**
     * @return mixed
     */
    public function getSalaire()
    {
        return $this->_salaire;
    }

    /**
     * @param mixed $salaire
     */
    public function setSalaire($salaire): void
    {
        $this->_salaire = $salaire;
    }
    public function infos() : string
    {
        return 'Nom : '.$this->getNom().' | Prénom : '.$this->getPrenom().' | Salaire : '.$this->getSalaire();
    }
}