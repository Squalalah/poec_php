<?php

class Individu
{
    // --- Propriétés
    protected $nom;
    protected $prenom;
    protected $telephone;
    //public abstract function infos() : string;

    public function __construct($nom, $prenom,$telephone = null)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->telephone = $telephone;
    }

    public function infosIndividu() : string {
        $text = 'Nom : '.$this->nom.', Prenom : '.$this->prenom;
        if($this->telephone != null) $text .= ', telephone : '.$this->telephone;
        return $text;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom): void
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed|null
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed|null $telephone
     */
    public function setTelephone($telephone): void
    {
        $this->telephone = $telephone;
    }


}