<?php

class Weakness
{
  private $energytype;

  private $multiplier;

  /**
   * constructor for energytype
   *
   * @param object $energytype is and object of the class Energytype
   * @param object $multiplier is an integer
   */
  function __construct($energytype, $multiplier)
  {
    $this->energytype = $energytype;
    $this->multiplier = $multiplier;
  }

    /**
     * Get the value of the name of the attack
     *
     * @return object
     */
    public function getEnergytype()
    {
        return $this->energytype;
    }

    /**
     * Get the value of the name of the attack
     *
     * @return int
     */
    public function getMultiplier()
    {
        return $this->multiplier;
    }

}
