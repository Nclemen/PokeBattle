<?php

use base\Pokemon;
use base\Energytype;
use base\Attack;
use base\Weakness;
use base\Resistance;

class Pikachu extends Pokemon
{

  public function __construct($name)
  {
    $name = $name;
    $energytype = new Energytype('Lightning');
    $hitpoints = 60;
    $attacks = [new Attack(['name'=>' Electric Ring','damage'=>50]),
                      new Attack(['name'=>'Pika Punch','damage'=>20])];
    $weakness = new weakness('Fire',1.5);
    $resistance = new resistance('Fighting',20);
    parent::__construct($name, $energytype, $hitpoints, $attacks, $weakness, $resistance);
  }
}
