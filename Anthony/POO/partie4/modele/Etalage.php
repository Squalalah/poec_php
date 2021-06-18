<?php
require_once('Emplacement.php');
class Etalage extends Emplacement {

    /**
     * Etalage constructor.
     */
    public function __construct(string $couleur, int $xCentre, int $yCentre)
    {
        parent::__construct($couleur, $xCentre, $yCentre);
        $this->dimension = 0;
    }

    public function affiche(): string {
        return 'Etalage [dimension: '.$this->dimension.', couleur: '.$this->couleur.', xCentre: '.$this->xCentre.', yCentre: '.$this->yCentre.']';
    }
}