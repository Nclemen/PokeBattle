<?php

class Resistance
{
  private $energytype;

  private $value;

  /**
   * constructor for energytype
   *
   * @param object $energytype is and object of the class Energytype
   * @param object $multiplier is an integer
   */
  function __construct($name, $value)
  {
    $this->energytype = $name;
    $this->value = $value;
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
