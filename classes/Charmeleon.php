<?php

use base\Pokemon;

class Charmeleon extends Pokemon
{

  public function __construct($name)
  {
    $this->setName($name);
    $this->setEnergytype(Energytype::FIRE);
    $this->setHitpoints(60);
    $this->setAttacks([['name'=>' Electric Ring','damage'=>50],
                      ['name'=>'Pika Punch','damage'=>20]]);
    $this->setWeakness(['name'=>'Fire','multiplier'=>1.5]);
    $this->setResistance(['name'=>'Fighting','value'=>20]);
  }
}
