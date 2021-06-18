<?php
require_once('IFormatage.php');

class VilleIF implements IFormatage {

    private int $cp;
    private string $ville;

    /**
     * VilleIF constructor.
     * @param int $cp
     * @param string $ville
     */
    public function __construct(int $cp, string $ville)
    {
        $this->cp = $this->formatageNombre($cp);
        $this->ville = $this->formatageChaine($ville);
    }

    public function getInfos() {
        return $this->ville.' CP: '.$this->cp;
        }

    public function formatageChaine($chaine) : string{
        return strtoupper($chaine);
    }
    public function formatageNombre($nombre) {
        return number_format($nombre, 0, "", " ");
    }


}