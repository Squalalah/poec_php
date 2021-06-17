<?php
class gite{
private $giid;
private $ginom;
private $gigpslat;
private $gigpaslong;
private $pays;
public function __construct($giid,$ginom,$gigpslat,$gigpaslong,$pays)
{
$this->giid=$giid;
$this->ginom=$ginom;
$this->gigpslat=$gigpslat;
$this->gigpaslong=$gigpaslong;
$this->pays=$pays;
}
    /**
     * Get the value of Giid
     *
     * @return mixed
     */
    public function getGiid()
    {
        return $this->giid;
    }

    /**
     * Set the value of Giid
     *
     * @param mixed giid
     *
     * @return self
     */
    public function setGiid($giid)
    {
        $this->giid = $giid;

        return $this;
    }

    /**
     * Get the value of Ginom
     *
     * @return mixed
     */
    public function getGinom()
    {
        return $this->ginom;
    }

    /**
     * Set the value of Ginom
     *
     * @param mixed ginom
     *
     * @return self
     */
    public function setGinom($ginom)
    {
        $this->ginom = $ginom;

        return $this;
    }

    /**
     * Get the value of Gigpslat
     *
     * @return mixed
     */
    public function getGigpslat()
    {
        return $this->gigpslat;
    }

    /**
     * Set the value of Gigpslat
     *
     * @param mixed gigpslat
     *
     * @return self
     */
    public function setGigpslat($gigpslat)
    {
        $this->gigpslat = $gigpslat;

        return $this;
    }

    /**
     * Get the value of Gigpaslong
     *
     * @return mixed
     */
    public function getGigpaslong()
    {
        return $this->gigpaslong;
    }

    /**
     * Set the value of Gigpaslong
     *
     * @param mixed gigpaslong
     *
     * @return self
     */
    public function setGigpaslong($gigpaslong)
    {
        $this->gigpaslong = $gigpaslong;

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
      return "Gite : "." ".$this->giid." ".$this->ginom." ".$this->gigpslat." ".$this->gigpaslong." ".$this->pays;
    }
}
