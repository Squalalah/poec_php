<?php
require_once("individu.php");
class Livre //création de la classe
{
    private int $nbrePages; //création de l'attribut privé $nbrePages
    private int $nbreChapitres; //création de l'attribut privé $nbreChapitres
    private string $titreLivre; //création de l'attribut privé $titreLivre
    private Individu $auteur;//création de l'attribut privé $auteur de type Individupublic

    function __construct(int $leNbrePages, int $leNbreChapitres, string $leTitreLivre, Individu $leAuteur) //création du constructeur avec ses attribut
    {
        $this->nbrePages = $leNbrePages; // initialisation de l'attribut _nbrePages avec le paramêtre leNbrePages
        $this->nbreChapitres = $leNbreChapitres; // l'attribut _nbreChapitres de l'objet prend pour valeur le contenu de la variable leNbreChapitres
        $this->titreLivre = $leTitreLivre; // valeur de l'attribut _titreLivre de l'objet prend
        $this->auteur = $leAuteur; // valeur de l'attribut _titreLivre de l'objet prend pour valeur le contenu de la variable
    }

    public function infosLivre() : string
    {
        return 'Livre dont le titre est ' . $this->titreLivre . ' qui contient ' . $this->nbreChapitres . ' chapitres et qui a ' . $this->nbrePages . ' pages et qui a pour auteur ' . $this->auteur->getPrenom() . ' ' . $this->auteur->getNom();
    }

    public function setNbrePages($leNbreDePages)
    {
        $this->nbrePages = $leNbreDePages;
    }

    public function getNbrePages() // retourne le nombre de pages de l'objet courant
    {
        return $this->nbrePages;
    }

    public function setNbreChapitres($leNbreDeChapitres) // permet d'indiquer le nombre de chapitre grâce à l'élément
    {
        $this->nbreChapitres = $leNbreDeChapitres;
    }

    public function getNbreChapitres()
    {
        return $this->nbreChapitres;
    }

    public function getTitreLivre() {
        return $this->titreLivre;
    }
    public function setTitreLivre($leTitreDuLivre) {
        $this->titreLivre=$leTitreDuLivre;
    }

    public function getAuteur() {
        return $this->auteur;
    }

    public function setAuteur($auteur) {
        $this->auteur=$auteur;
    }
}