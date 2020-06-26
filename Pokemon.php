<?php

/**
 *
 */
class Pokemon
{

  public $name;

  public $energytype;

  public $hitpoints;

  public $health;

  public $attacks;

  public $weakness;

  public $resistance;

  function __construct($name, $energytype, $hitpoints)
  {
    $this->name = $name;
    $this->energytype = $energytype;
    $this->hitpoints = $hitpoints;
  }

  public function setName($name){
    $this->name = $name;
  }

  public function getName(){
    echo $this->name;
  }
}

















 ?>
