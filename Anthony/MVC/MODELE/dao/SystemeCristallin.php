<?php
class SystemeCristallin
{
  private $syid;
  private $synom;
  private $syaxea1;
  private $syaxea2;
  private $syaxea3;
  private $syanglealpha;
  private $syanglebeta;
  private $syanglegamma;
  private $image;
  public function __construct($syid, $synom, $syaxea1, $syaxea2, $syaxea3, $syanglealpha, $syanglebeta, $syanglegamma, $image)
  {
    $this->syid=$syid;
    $this->synom=$synom;
    $this->syaxea1=$syaxea1;
    $this->syaxea2=$syaxea2;
    $this->syaxea3=$syaxea3;
    $this->syanglealpha=$syanglealpha;
    $this->syanglebeta=$syanglebeta;
    $this->syanglegamma=$syanglegamma;
    $this->image=$image;
  }
    /**
     * Get the value of Syid
     *
     * @return mixed
     */
    public function getSyid()
    {
        return $this->syid;
    }
    /**
     * Set the value of Syid
     *
     * @param mixed syid
     *
     * @return self
     */
    public function setSyid($syid)
    {
        $this->syid = $syid;

        return $this;
    }

    /**
     * Get the value of Synom
     *
     * @return mixed
     */
    public function getSynom()
    {
        return $this->synom;
    }

    /**
     * Set the value of Synom
     *
     * @param mixed synom
     *
     * @return self
     */
    public function setSynom($synom)
    {
        $this->synom = $synom;

        return $this;
    }

    /**
     * Get the value of Syaxea
     *
     * @return mixed
     */
    public function getSyaxea1()
    {
        return $this->syaxea1;
    }

    /**
     * Set the value of Syaxea
     *
     * @param mixed syaxea1
     *
     * @return self
     */
    public function setSyaxea1($syaxea1)
    {
        $this->syaxea1 = $syaxea1;

        return $this;
    }

    /**
     * Get the value of Syaxea
     *
     * @return mixed
     */
    public function getSyaxea2()
    {
        return $this->syaxea2;
    }

    /**
     * Set the value of Syaxea
     *
     * @param mixed syaxea2
     *
     * @return self
     */
    public function setSyaxea2($syaxea2)
    {
        $this->syaxea2 = $syaxea2;

        return $this;
    }

    /**
     * Get the value of Syaxea
     *
     * @return mixed
     */
    public function getSyaxea3()
    {
        return $this->syaxea3;
    }

    /**
     * Set the value of Syaxea
     *
     * @param mixed syaxea3
     *
     * @return self
     */
    public function setSyaxea3($syaxea3)
    {
        $this->syaxea3 = $syaxea3;

        return $this;
    }

    /**
     * Get the value of Syanglealpha
     *
     * @return mixed
     */
    public function getSyanglealpha()
    {
        return $this->syanglealpha;
    }

    /**
     * Set the value of Syanglealpha
     *
     * @param mixed syanglealpha
     *
     * @return self
     */
    public function setSyanglealpha($syanglealpha)
    {
        $this->syanglealpha = $syanglealpha;

        return $this;
    }

    /**
     * Get the value of Syanglebeta
     *
     * @return mixed
     */
    public function getSyanglebeta()
    {
        return $this->syanglebeta;
    }

    /**
     * Set the value of Syanglebeta
     *
     * @param mixed syanglebeta
     *
     * @return self
     */
    public function setSyanglebeta($syanglebeta)
    {
        $this->syanglebeta = $syanglebeta;

        return $this;
    }

    /**
     * Get the value of Syanglegamma
     *
     * @return mixed
     */
    public function getSyanglegamma()
    {
        return $this->syanglegamma;
    }

    /**
     * Set the value of Syanglegamma
     *
     * @param mixed syanglegamma
     *
     * @return self
     */
    public function setSyanglegamma($syanglegamma)
    {
        $this->syanglegamma = $syanglegamma;

        return $this;
    }

    /**
     * Get the value of Image
     *
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of Image
     *
     * @param mixed image
     *
     * @return self
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }
    public function __toString()
    {
      return "Système Cristallin :".$this->syid ." ". $this->synom." ".$this->syaxea1." ". $this->syaxea2." ".$this->syaxea3." ". $this->syanglealpha." " .$this->syanglebeta." ".$this->syanglegamma." ".$this->image;
    }
}
?>
