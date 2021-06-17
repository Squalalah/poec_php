<?php
class Commune
{
  private $comid;
  private $comnom;
  private $comcodepostal;
  private $pays;
  public function __construct($comid,$comnom,$comcodepostal,$pays)
  {
    $this->comid=$comid;
    $this->comnom=$comnom;
    $this->comcodepostal=$comcodepostal;
    $this->pays=$pays;
  }


    /**
     * Get the value of Comid
     *
     * @return mixed
     */
    public function getComid()
    {
        return $this->comid;
    }

    /**
     * Set the value of Comid
     *
     * @param mixed comid
     *
     * @return self
     */
    public function setComid($comid)
    {
        $this->comid = $comid;

        return $this;
    }

    /**
     * Get the value of Comnom
     *
     * @return mixed
     */
    public function getComnom()
    {
        return $this->comnom;
    }

    /**
     * Set the value of Comnom
     *
     * @param mixed comnom
     *
     * @return self
     */
    public function setComnom($comnom)
    {
        $this->comnom = $comnom;

        return $this;
    }

    /**
     * Get the value of Comcodepostal
     *
     * @return mixed
     */
    public function getComcodepostal()
    {
        return $this->comcodepostal;
    }

    /**
     * Set the value of Comcodepostal
     *
     * @param mixed comcodepostal
     *
     * @return self
     */
    public function setComcodepostal($comcodepostal)
    {
        $this->comcodepostal = $comcodepostal;

        return $this;
    }

    /**
     * Get the value of Pays
     *
     * @return mixed
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set the value of Pays
     *
     * @param mixed pays
     *
     * @return self
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }
    public function __toString()
    {
      return "Commune : ".$this->comid." ".$this->comnom." ".$this->comcodepostal." ".$this->pays;
    }
}
