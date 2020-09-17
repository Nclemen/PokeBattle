<?php
namespace base;

require 'Energytype.php';
require 'Attack.php';
require 'Weakness.php';
require 'Resistance.php';

class Pokemon
{
    /**
     * the name of the pokemon
     *
     * @var string
     */
    private $name;

    /**
     * the pokemons energytype
     *
     * @var
     */
    private $energytype;

    /**
     * the maximum amount of hitpoints of the pokemon
     *
     * @var int
     */
    private $hitpoints;

    /**
     * the current amount of healthpoints of the pokemon
     *
     * @var int
     */
    private $health;

    /**
     * list of pokemons attacks
     *
     * @var array
     */
    private $attacks;

    /**
     * energytypes which the pokemon is weak to
     *
     * @var
     */
    private $weakness;

    /**
     * energytypes which the pokemon is resistant to
     *
     * @var
     */
    private $resistance;

    public function __construct()
    {
      // $this->name = $name;
      // $this->energytype = new Energytype();
      // $this->hitpoints = $hitpoints;
      // code ...

      foreach ()

    }

    public function attackPokemon($target, $attack){

    }

    /**
     * Set the value of the name of the pokemon
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
     * Get the value of the name of the pokemon
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of the pokemons energytype
     *
     * @param mixed $energytype
     *
     * @return self
     */
    public function setEnergytype($energytype)
    {
        $this->energytype = new Energytype($energytype);

        return $this;
    }

    /**
     * Get the value of the pokemons energytype
     *
     * @return mixed
     */
    public function getEnergytype()
    {
        return $this->energytype;
    }

    /**
     * Set the value of the maximum amount of hitpoints of the pokemon
     *
     * @param int $hitpoints
     *
     * @return self
     */
    public function setHitpoints($hitpoints)
    {
        $this->hitpoints = $hitpoints;

        return $this;
    }

    /**
     * Get the value of the maximum amount of hitpoints of the pokemon
     *
     * @return int
     */
    public function getHitpoints()
    {
        return $this->hitpoints;
    }

    /**
     * Set the value of the current amount of healthpoints of the pokemon
     *
     * @param int $health
     *
     * @return self
     */
    public function setHealth($health)
    {
        $this->health = $health;

        return $this;
    }

    /**
     * Get the value of the current amount of healthpoints of the pokemon
     *
     * @return int
     */
    public function getHealth()
    {
        return $this->health;
    }

    /**
     * Set the value of list of pokemons attacks
     *
     * @param object $attacks
     *
     * @return self
     */
    public function setAttacks(object $attacks)
    {

      foreach($attacks as $key=>$attack) {
          $this->attacks[$key] = new Attack($attack['name'], $attack['damage']);
      }

        return $this;
    }

    /**
     * Get the value of list of pokemons attacks
     *
     * @return array
     */
    public function getAttacks()
    {
        return $this->attacks;
    }

    /**
     * Set the value of energytypes which the pokemon is weak to
     *
     * @param mixed $weakness
     *
     * @return self
     */
    public function setWeakness($weakness)
    {
        $this->weakness = new Weakness($weakness['name'], $weakness['multiplier']);

        return $this;
    }

    /**
     * Get the value of energytypes which the pokemon is weak to
     *
     * @return mixed
     */
    public function getWeakness()
    {
        return $this->weakness;
    }

    /**
     * Set the value of energytypes which the pokemon is resistant to
     *
     * @param mixed $resistance
     *
     * @return self
     */
    public function setResistance($resistance)
    {
        $this->resistance = new Resistance($resistance['name'], $resistance['value']);

        return $this;
    }

    /**
     * Get the value of energytypes which the pokemon is resistant to
     *
     * @return mixed
     */
    public function getResistance()
    {
        return $this->resistance;
    }

}
