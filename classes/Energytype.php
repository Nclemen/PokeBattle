<?php

class Energytype
{

  const LIGHTNING = 'Lightning';
  const FIRE = 'Fire';
  const WATER = 'Water';

  private $name;

  /**
   * constructer for energytype
   *
   * @param string $name is set by calling the set const above
   */
  function __construct($name)
  {
    $this->name = $name;
  }

  /**
    * function to get attack damage
    *
    * @return string
    */
  public function getName(){
    return $this->name;
  }
}
