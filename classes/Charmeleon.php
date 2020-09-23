<?php

class Charmeleon extends Pokemon
{

  public function __construct($name)
  {
    $name = $name;
    $energytype = new Energytype('Fire');
    $hitpoints = 60;
    $attacks = [new Attack('Head Butt',10),
                      new Attack('Flare',30)];
    $weakness = new weakness(new Energytype('Water'),2);
    $resistance = new resistance(new Energytype('Lightning'),10);
    parent::__construct($name, $energytype, $hitpoints, $attacks, $weakness, $resistance);
  }
}
