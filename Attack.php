<?php

/**
 *
 */
class Attack
{

  /**
    * the name of the attack
    *
    * @var string
    */
  private $name;
  /**
    * the amount of damage of the attack
    *
    * @var int
    */
  private $damage;

  function __construct($name, $damage)
  {
    $this->name = $name;
    $this->damage = $damage;
  }
}


 ?>
