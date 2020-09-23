<?php

class Pikachu extends Pokemon
{

  public function __construct($name)
  {
    $name = $name;
    $energytype = new Energytype('Lightning');
    $hitpoints = 60;
    $attacks = [new Attack('Electric Ring',50),
                      new Attack('Pika Punch',20)];
    $weakness = new weakness(new Energytype('Fire'),1.5);
    $resistance = new resistance(new Energytype('Fighting'),20);
    parent::__construct($name, $energytype, $hitpoints, $attacks, $weakness, $resistance);
  }
}
