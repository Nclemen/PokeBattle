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
<<<<<<< HEAD
    $this->setName($name);
    $this->setEnergytype(Energytype::FIRE);
    $this->setHitpoints(60);
    $this->setAttacks([['name'=>' Electric Ring','damage'=>50],
                      ['name'=>'Pika Punch','damage'=>20]]);
    $this->setWeakness(['name'=>'Fire','multiplier'=>1.5]);
    $this->setResistance(['name'=>'Fighting','value'=>20]);
=======
    $name = $name;
    $energytype = new Energytype('Fire');
    $hitpoints = 60;
    $attacks = [new Attack('Head Butt',10),
                      new Attack('Flare',30)];
    $weakness = new weakness(new Energytype('Water'),2);
    $resistance = new resistance(new Energytype('Lightning'),10);
    parent::__construct($name, $energytype, $hitpoints, $attacks, $weakness, $resistance);
>>>>>>> master
  }
}
