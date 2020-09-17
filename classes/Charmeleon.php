<?php

use base\Pokemon;
use base\Energytype;
use base\Attack;
use base\Weakness;
use base\Resistance;

class Charmeleon extends Pokemon
{

  public function __construct($name)
  {
    $name = $name;
    $energytype = new Energytype('Fire');
    $hitpoints = 60;
    $attacks = [new Attack(['name'=>'Head Butt','damage'=>10]),
                      new Attack(['name'=>'Flare','damage'=>30])];
    $weakness = new weakness('Water',2);
    $resistance = new resistance('Lightning',10);
    parent::__construct($name, $energytype, $hitpoints, $attacks, $weakness, $resistance);
  }
}
