<?php
namespace base;

// use base\Energytype;

class Resistance
{
  private $energytype;

  private $value;

  function __construct($energyname, $value)
  {
    $this->energytype = new Energytype($energyname);
    $this->value = $value;
  }
}


 ?>
