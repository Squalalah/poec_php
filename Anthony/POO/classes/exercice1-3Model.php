<?php


class Livre  //création de la classe
{
    private int $nbrePages;
    private int $nbreChapitres;
    private string $titreLivre;
    public function __construct($leNbrePages,$leNbreChapitres,$leTitreLivre) {
        $this->nbrePages = $leNbrePages;
        $this->nbreChapitres =$leNbreChapitres;
        $this->titreLivre =$leTitreLivre;
    }

    public function infosLivre() : string {
        return 'Livre dont le titre est '.$this->titreLivre.' qui contient  '. $this->nbreChapitres.' chapitres et qui a '.$this->nbrePages.' pages.';
    }
}


class Individu {
    private string $nom;
    private string $prenom;
    public function __construct($unNom,$unPrenom)
    {
        $this->nom = $unNom;
        $this->prenom = $unPrenom;
    }

    public function infosIndividu() : string {
        return $this->nom. ' ' . $this->prenom;
    }
}

class TFormation {
    private int $formId;
    private string $formDateDeb, $formDateFin;
    private int $formDureeHeures;
    private string $formLib, $formNiveau;
    private int $formISBN;
    private string $formType;

    public function __construct(int $formId, string $formDateDeb, string $formDateFin, int $formDureeHeures, string $formLib, string $formNiveau, int $formISBN, string $formType)
    {
        $this->formId = $formId;
        $this->formDateDeb = $formDateDeb;
        $this->formDateFin = $formDateFin;
        $this->formDureeHeures = $formDureeHeures;
        $this->formLib = $formLib;
        $this->formNiveau = $formNiveau;
        $this->formISBN = $formISBN;
        $this->formType = $formType;
    }


    public function infosTFormation(): string {
        return $this->formId . ' ' . $this->formDateDeb . ' ' . $this->formDateFin . ' ' . $this->formDureeHeures . ' ' . $this->formLib . ' ' . $this->formNiveau . ' ' . $this->formISBN . ' ' . $this->formType;
    }
}
