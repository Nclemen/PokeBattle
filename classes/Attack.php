<?php
namespace base;

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

    function __construct($attackData)
    {
      $this->name = $attackData['name'];
      $this->damage = $attackData['damage'];
    }

    /**
     * Set the value of the name of the attack
     *
     * @param string $name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
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
     * Set the value of the amount of damage of the attack
     *
     * @param int $damage
     *
     * @return self
     */
    public function setDamage($damage)
    {
        $this->damage = $damage;

        return $this;
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
