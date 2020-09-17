<?php
namespace base;

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
  private $value;

  function __construct($name)
  {
    $this->name = $name;
    // $this->value = $value;
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
    * @var string $name
    *
    * @return self
    */
  public function setName($name){
    $this->name = $name;

    return $this;
  }

  /**
    * function to get attack damage
    *
    * @return int
    */
  public function getValue(){
    return $this->damage;
  }

  /**
    * function to set damage
    *
    * @var int $value
    *
    * @return self
    */
  public function setValue($value){
    $this->value = $value;

    return $this;
  }
}
