<?php

use Energytype.php;

class Resistance
{
  private $energytype;

  private $value;

  function __construct($energyname, $energyvalue, $value)
  {
    $this->energytype = new Energytype($energyname,$energyvalue);
    $this->value = $value;
  }
}


 ?>
