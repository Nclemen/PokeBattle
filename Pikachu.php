<?php



/**
 *
 */
class pikachu extends Pokemon
{

  public function __construct($name)
  {
    $this->setName($name);
    $this->setEnergytype('electric');
    $this->setHitpoints(60);
    $this->setAttacks(['Electric Ring'=>50,
                      'Pika Punch'=>20]);
    $this->setWeakness(['Fire'=>1.5]);
    $this->setResistance(['Fighting'=>20]);

  }
}

































?>
