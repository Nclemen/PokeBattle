<?php

class Charmeleon extends Pokemon
{

  public function __construct($name)
  {
    $name = $name;
    $energytype = new Energytype(EnergyType::FIRE);
    $hitpoints = 60;
    $attacks = [new Attack('Head Butt',10),
                      new Attack('Flare',30)];
    $weakness = new weakness(new Energytype(EnergyType::WATER),2);
    $resistance = new resistance(new Energytype(EnergyType::FIRE),10);
    parent::__construct($name, $energytype, $hitpoints, $attacks, $weakness, $resistance);
  }
}
