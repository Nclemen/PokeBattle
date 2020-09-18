<?php
namespace base;

class Weakness
{
  /**
    * the energytype that the pokemon is weak to
    *
    * @var object
    */
  private $energytype;

  /**
    * the amount of time the attack that hits the pokemon get multiplied if it is at an energytype disadvantage
    *
    * @var int
    */
  private $multiplier;

  function __construct($energytype, $multiplier)
  {
    $this->energytype = $energytype;
    $this->multiplier = $multiplier;
  }

    /**
     * Set the value of the name of the attack
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
     * Get the value of the name of the attack
     *
     * @return object
     */
    public function getEnergytype()
    {
        return $this->energytype;
    }

    /**
     * Set the value of the name of the attack
     *
     * @param int $multiplier
     *
     * @return self
     */
    public function setMultiplier($multiplier)
    {
        $this->multiplier = $multiplier;

        return $this;
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
