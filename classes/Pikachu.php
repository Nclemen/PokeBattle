<?php

use base\Pokemon;

class Pikachu extends Pokemon
{

  public function __construct($name)
  {
    $this->setName($name);
    $this->setEnergytype('Fire');
    $this->setHitpoints(60);
    $this->setAttacks([['name'=>'Head Butt','damage'=>10],
                      ['name'=>'Flare','damage'=>30]]);
    $this->setWeakness(['name'=>'Water','multiplier'=>2]);
    $this->setResistance(['name'=>'Lightning','value'=>10]);
  }
}






//vragen voor les
//
// onder energytype staat set met vaste waarden wat wordt daarmee bedoelt (de waarde wordt niet aangegeven op itslearning)
//
//
//
//
//
//
//
//
//


























?>
