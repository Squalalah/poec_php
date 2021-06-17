<?php


class Stylo {

    private string $reference;
    private string $couleur;
    private $prix;
    private int $qteStock;

    /**
     * Stylo constructor.
     * @param string $reference
     * @param string $couleur
     * @param int $prix
     */
    public function __construct(string $reference, string $couleur, $prix, $qteStock)
    {
        $this->setQteStock($qteStock);
        $this->reference = $reference;
        $this->couleur = $couleur;
        $this->prix = $prix;
    }

    /**
     * @return string
     */
    public function getReference(): string
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     */
    public function setReference(string $reference): void
    {
        $this->reference = $reference;
    }

    /**
     * @return string
     */
    public function getCouleur(): string
    {
        return $this->couleur;
    }

    /**
     * @param string $couleur
     */
    public function setCouleur(string $couleur): void
    {
        $this->couleur = $couleur;
    }

    /**
     * @return int
     */
    public function getPrix(): int
    {
        return $this->prix;
    }

    /**
     * @param int $prix
     */
    public function setPrix($prix): void
    {
        if(!is_numeric($prix)) throw new Exception('La valeur entrée est incorrecte');
        else $this->prix = $prix;
    }

    /**
     * @return int
     */
    public function getQteStock(): int
    {
        return $this->qteStock;
    }

    /**
     * @param int $qteStock
     */
    public function setQteStock($qteStock): void
    {
        if(!preg_match('/[0-9]/', $qteStock)) throw new Exception('qtestock n\'est pas un nombre entier.');
        else $this->qteStock = $qteStock;
    }




}