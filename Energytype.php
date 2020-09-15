<?php

class Energytype
{

  /**
    * the name of the energytype
    *
    * @var string
    */
  private $name;

  /**
    * the set value of the energytype
    *
    * @var int
    */
  private $value

  function __construct($name, $value)
  {
    $this->name = $name;
    $this->value = $value;
  }

  /**
    * function to get attack damage
    *
    * @return string
    */
  public function getName(){
    return $this->name;
  }

  /**
    * function to set damage
    *
    * @var string
    */
  public function setName($name){
    $this->name = $name;
  }

  /**
    * function to get attack damage
    *
    * @return int
    */
  public function getDamage(){
    return $this->damage;
  }

  /**
    * function to set damage
    *
    * @var int
    */
  public function setDamage($damage){
    $this->damage = $damage;
  }
}


 ?>
