<?php
class Groupe
{
private $grid;
private $grnom;
private $grcommentaire;
public function __construct($grid, $grnom,$grcommentaire)
{
  $this->grid=$grid;
  $this->grnom=$grnom;
  $this->grcommentaire=$grcommentaire;
}


    /**
     * Get the value of Grid
     *
     * @return mixed
     */
    public function getGrid()
    {
        return $this->grid;
    }

    /**
     * Set the value of Grid
     *
     * @param mixed grid
     *
     * @return self
     */
    public function setGrid($grid)
    {
        $this->grid = $grid;

        return $this;
    }

    /**
     * Get the value of Grnom
     *
     * @return mixed
     */
    public function getGrnom()
    {
        return $this->grnom;
    }

    /**
     * Set the value of Grnom
     *
     * @param mixed grnom
     *
     * @return self
     */
    public function setGrnom($grnom)
    {
        $this->grnom = $grnom;

        return $this;
    }

    /**
     * Get the value of Grcommentaire
     *
     * @return mixed
     */
    public function getGrcommentaire()
    {
        return $this->grcommentaire;
    }

    /**
     * Set the value of Grcommentaire
     *
     * @param mixed grcommentaire
     *
     * @return self
     */
    public function setGrcommentaire($grcommentaire)
    {
        $this->grcommentaire = $grcommentaire;

        return $this;
    }
 public function __toString()
 {
   return "Groupe : ".  $this->grid." ".$this->grnom." ".$this->grcommentaire;
 }
}
