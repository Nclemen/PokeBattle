<?php
namespace base;

// use base\Energytype;

class Weakness
{
  /**
    * the name of the attack
    *
    * @var object
    */
  private $energytype;

  /**
    * the name of the attack
    *
    * @var int
    */
  private $multiplier;

  function __construct($energyname, $multiplier)
  {
    $this->energytype = new Energytype($energyname);
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
