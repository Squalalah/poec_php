<?php
class Pays
{
  private $paid;
  private $panom;
  public function __construct($paid, $panom)
  {
    $this->paid=$paid;
    $this->panom=$panom;
  }


    /**
     * Get the value of Paid
     *
     * @return mixed
     */
    public function getPaid()
    {
        return $this->paid;
    }

    /**
     * Set the value of Paid
     *
     * @param mixed paid
     *
     * @return self
     */
    public function setPaid($paid)
    {
        $this->paid = $paid;

        return $this;
    }

    /**
     * Get the value of Panom
     *
     * @return mixed
     */
    public function getPanom()
    {
        return $this->panom;
    }

    /**
     * Set the value of Panom
     *
     * @param mixed panom
     *
     * @return self
     */
    public function setPanom($panom)
    {
        $this->panom = $panom;

        return $this;
    }

 public function __toString()
 {
   return "Pays :".$this->paid." ".$this->panom;
 }
}
?>
