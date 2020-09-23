<?php

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

    /**
     * constructor for attack
     * 
     * @param string $name name of the attack
     * @param int $damage the amount of damage the attack does
     */
    function __construct($name, $damage)
    {
      $this->name = $name;
      $this->damage = $damage;
    }

    /**
     * Get the value of the name of the attack
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of the amount of damage of the attack
     *
     * @return int
     */
    public function getDamage()
    {
        return $this->damage;
    }

}
 ?>
