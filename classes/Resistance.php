<?php

class Resistance
{
  /**
    * the energytype that the pokemon is resistant to
    *
    * @var object
    */
  private $energytype;

  /**
    * the amount hitpoints that get subtracted from the damage if it is at an energytype advantage
    *
    * @var int
    */
  private $value;

  function __construct($name, $value)
  {
    $this->energytype = $name;
    $this->value = $value;
  }

    /**
     * Set the value of the energytype that the pokemon is resistant to
     *
     * @param object $energytype
     *
     * @return self
     */
    public function setEnergytype(object $energytype)
    {
        $this->energytype = $energytype;

        return $this;
    }

    /**
     * Get the value of the energytype that the pokemon is resistant to
     *
     * @return object
     */
    public function getEnergytype()
    {
        return $this->energytype;
    }

    /**
     * Set the value of the amount hitpoints that get subtracted from the damage if it is at an energytype advantage
     *
     * @param int $value
     *
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get the value of the amount hitpoints that get subtracted from the damage if it is at an energytype advantage
     *
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

}


 ?>
