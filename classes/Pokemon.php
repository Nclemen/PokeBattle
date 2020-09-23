<?php

class Pokemon
{

    private $name;

    private $energytype;

    private $hitpoints;

    private $health;

    private $attacks;

    private $weakness;

    private $resistance;

    private static $population = 0;

    private static $pokemonPc = [];

    /**
     * constructor for pokemon
     *
     * @param string $name string
     * @param object $energytype  energytype
     * @param int $hitpoints hitpoints
     * @param object $attacks array of Attack instances
     * @param object $weakness instance of Weakness
     * @param object $resistance instance of Resistance
     */
    public function __construct($name, $energytype, $hitpoints, $attacks, $weakness, $resistance)
    {
      $this->name = $name;
      $this->energytype = $energytype;
      $this->hitpoints = $hitpoints;
      $this->health = $hitpoints;
      $this->attacks = $attacks;
      $this->weakness = $weakness;
      $this->resistance = $resistance;

      ++self::$population;
      self::$pokemonPc[] = $this;
    }

    /**
     * Set the value of the name of the pokemon
     *
     * @param string $name
     *
     * @return object returns instance
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
     * Get the value of the pokemons energytype
     *
     * @return object
     */
    public function getEnergytype()
    {
        return $this->energytype;
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
     * @return object returns instance
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
     * Get the value of list of pokemons attacks
     *
     * @return array
     */
    public function getAttacks()
    {
        return $this->attacks;
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
     * Get the value of energytypes which the pokemon is resistant to
     *
     * @return object
     */
    public function getResistance()
    {
        return $this->resistance;
    }



    // battle methods

    /**
     *
     *
     * @param object $target an pokemon object that is the target of the attack
     * @param object $attack an object of attack that is being used to attack
     *
     * @return array returns an array that contains data of the attack that just happend
     */
    public function attackPokemon($target, $attack){

      $dmg = $target->receiveAttack($attack, $this);

      $data = ['target'=>$target
              ,'attacker'=>$this
              ,'attack'=>$attack
              ,'damage'=>$dmg];

      return $data ;
    }


    public function receiveAttack($attack, $attacker)
    {
      $dmgdlt = $attack->getDamage();

      if ($this->getWeakness()->getEnergytype()->getName() == $attacker->getEnergytype()->getName()) {
        $dmgdlt = $dmgdlt * $this->getWeakness()->getMultiplier();
      }

      if ($this->getResistance()->getEnergytype()->getName() == $this->getEnergytype()->getName()) {
        $dmgdlt = $dmgdlt - $this->getResistance()->getValue();
      }

      $this->setHealth($this->getHealth() - $dmgdlt);

      $this->checkHealth();

      return $dmgdlt;
    }

    /**
     * checks if the pokemon is alive
     *
     * @return int returns the health of the pokemon
     */
    public function checkHealth(){
      if ($this->getHealth() <=  0) {
        --self::$population;
      }
      return $this->getHealth();
    }


    // statistics methods

    /**
     * get the amount of all pokemon
     *
     * @return int returns the value of population
     */
    public static function getPopulation(){
      return self::$population;
    }

    /**
     * get the average health of all living pokemon
     *
     * @return int returns the average health of all living pokemon
     */
    public static function getPopulationHealth(){
      $total = 0;

      foreach(self::$pokemonPc as $pokemon){
          $hp = $pokemon->getHealth();
          if (!($hp <= 0)){
                $total+=$hp;
          }
      }

      return $total/=self::$population;
    }

    /**
     * get array of all the created pokemon
     *
     * @return array
     */
    public function getPokemonPc()
    {
      return self::$pokemonPc;
    }
}
