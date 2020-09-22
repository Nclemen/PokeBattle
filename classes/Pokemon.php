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
     * @var object
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
     * @var object
     */
    private $weakness;

    /**
     * energytypes which the pokemon is resistant to
     *
     * @var object
     */
    private $resistance;

    /**
    * the amount of living pokemon
    *
    * @var
    */
    public static $population = 0;

    /**
     * array of all the created pokemon
     *
     * @var
     */
    public static $pokemonPc = [];

    public function __construct($name, $energytype, $hitpoints, $attacks, $weakness, $resistance)
    {
<<<<<<< HEAD
      // $this->name = $name;
      // $this->energytype = new Energytype();
      // $this->hitpoints = $hitpoints;
      // code ...

      foreach ()

    }

    public function attackPokemon($target, $attack){

=======
      $this->name = $name;
      $this->energytype = $energytype;
      $this->hitpoints = $hitpoints;
      $this->health = $hitpoints;
      $this->attacks = $attacks;
      $this->weakness = $weakness;
      $this->resistance = $resistance;

      ++self::$population;
      self::$pokemonPc[] = $this;
>>>>>>> master
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
     * @param object $energytype
     *
     * @return self
     */
    public function setEnergytype(object $energytype)
    {
        $this->energytype = $energytype;

        return $this;
    }

    /**
     * Get the value of the pokemons energytype
     *
     * @return object
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
        $this->attacks = $attacks;

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
     * @param object $weakness
     *
     * @return self
     */
    public function setWeakness(object $weakness)
    {
        $this->weakness = $weakness;

        return $this;
    }

    /**
     * Get the value of energytypes which the pokemon is weak to
     *
     * @return object
     */
    public function getWeakness()
    {
        return $this->weakness;
    }

    /**
     * Set the value of energytypes which the pokemon is resistant to
     *
     * @param object $resistance
     *
     * @return self
     */
    public function setResistance(object $resistance)
    {
        $this->resistance = $resistance;

        return $this;
    }

    /**
     * Get the value of energytypes which the pokemon is resistant to
     *
     * @return object
     */
    public function getResistance()
    {
        return $this->resistance;
    }



    // battle methods

    public function attackPokemon($target, $attack){
      $dmgdlt = $attack->getDamage();

      if ($target->getWeakness()->getEnergytype()->getName() == $this->getEnergytype()->getName()) {
        $dmgdlt = $dmgdlt * $target->getWeakness()->getMultiplier();
      }

      if ($target->getResistance()->getEnergytype()->getName() == $this->getEnergytype()->getName()) {
        $dmgdlt = $dmgdlt - $target->getResistance()->getValue();
      }

      $target->setHealth($target->getHealth() - $dmgdlt);

      $this->battleLog($target, $attack, $dmgdlt);

      $target->checkHealth($target);
    }



    public function battleLog($target, $attack, $dmgdlt){
      print_r(
        '<pre>' . $this->getName() .  ' attacks ' . $target->getName() . ' using ' . $attack->getName() . '</pre>'.
        '<pre>' . $target->getName() . ' receives ' . $dmgdlt . ' points of damage </pre>'.
        '<pre>' . $target->getName() . 's health = ' . $target->getHealth() .
        '</br>' . $this->getName() . 's health = ' . $this->getHealth() . '</pre>'
        );
    }

    public function checkHealth($pokemon){
      if ($pokemon->getHealth() <=  0) {
        --self::$population;
        print_r('<pre>' . $pokemon->getName() . ' has fainted</pre>');
      }
    }


    // statistics methods


    public static function getPopulation(){
      return self::$population;
    }

    public static function getPopulationHealth(){
      $total = 0;

      foreach(self::$pokemonPc as $pokemon){
          $hp = $pokemon->getHealth();
          if (!($hp <= 0)){
                $total+=$hp;
          }
      }

      return "the average population health is " . $total/=self::$population;
    }


}
