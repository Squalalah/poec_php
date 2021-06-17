<?php
class Individu {
    private string $nom;
    private string $prenom;
    public function __construct($unNom,$unPrenom)
    {
        $this->nom = $unNom;
        $this->prenom = $unPrenom;
    }

    public function __destruct(){
        echo 'Destruction de '. $this->nom . ' ' . $this->prenom.PHP_EOL;
    }

    public function infosIndividu() : string {
        return $this->nom. ' ' . $this->prenom;
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
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom(string $prenom): void
    {
        $this->prenom = $prenom;
    }
}