<?php

class Livre
{
    private int $nbrePages;
    private int $nbreChapitres;
    private string $titreLivre;

    public function __construct(int $nbrePages, int $nbreChapitres, string $titreLivre)
    {
        $this->nbrePages = $nbrePages;
        $this->nbreChapitres = $nbreChapitres;
        $this->titreLivre = $titreLivre;
    }

    public function infosLivre() : string
    {
        return 'Livre dont le titre est ' . $this->titreLivre . ' qui contient  ' . $this->nbreChapitres . ' chapitres et qui a ' . $this->nbrePages . ' pages.';
    }
    
    #region getter/setter
    public function setNbrePages($leNbreDePages)
    {
        $this->nbrePages = $leNbreDePages;
    }

    public function getNbrePages() : int
    {
        return $this->nbrePages;
    }

    public function setNbreChapitres($leNbreDeChapitres)
    {
        $this->nbreChapitres = $leNbreDeChapitres;
    }

    public function getNbreChapitres() : int
    {
        return $this->nbreChapitres;
    }

    public function getTitreLivre() : string
    {
        return $this->titreLivre;
    }

    public function setTitreLivre($leTitreDuLivre)
    {
        $this->titreLivre = $leTitreDuLivre;
    }
    #endregion
}