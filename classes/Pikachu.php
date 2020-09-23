<?php

class Pikachu extends Pokemon
{
  /**
   * constructor for pikachu
   * 
   * @param string $name name of the pikachu
   */
  public function __construct($name)
  {
    $name = $name;
    $energytype = new Energytype(EnergyType::LIGHTNING);
    $hitpoints = 60;
    $attacks = [new Attack('Electric Ring',50),
                      new Attack('Pika Punch',20)];
    $weakness = new weakness(new Energytype(EnergyType::FIRE),1.5);
    $resistance = new resistance(new Energytype(EnergyType::LIGHTNING),20);
    parent::__construct($name, $energytype, $hitpoints, $attacks, $weakness, $resistance);
  }
}
