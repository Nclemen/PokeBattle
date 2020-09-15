<?php

include 'Energytype.php';

class Weakness
{
  private $energytype;

  private $multiplier;

  function __construct($energyname, $energyvalue, $multiplier)
  {
    $this->energytype = new Energytype($energyname,$energyvalue);
    $this->multiplier = $multiplier;
  }
}


 ?>
