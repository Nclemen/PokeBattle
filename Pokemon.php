<?php

/**
 *
 */
class Pokemon
{

<<<<<<< HEAD
  public $name;

  public $energytype;

  public $hitpoints;

  public $health;

  public $attacks;

  public $weakness;

  public $resistance;

<<<<<<< HEAD
  public static $population = 0;

  protected static $pokemonPc = [];

  protected static $pokebag = [];


  public function __construct($name, $energytype, $hitpoints, $attacks, $weakness, $resistance){
=======
  function __construct($name, $energytype, $hitpoints)
  {
>>>>>>> master
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
=======
    /**
     * the name of the pokemon
     *
     * @var string
     */
    private $name;

    /**
     * the pokemons energytype
     *
     * @var string
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
    private $attacks = [];

    /**
     * list of the energytypes which the pokemon is weak to
     *
     * @var array
     */
    private $weakness;

    /**
     * list of the energytypes which the pokemon is resistant to
     *
     * @var array
     */
    private $resistance;

    public function __construct($name)
    {
      $this->name = $name;
      $this->energytype = $energytype;
      $this->hitpoints = $hitpoints;
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
     * @param string $energytype
     *
     * @return self
     */
    public function setEnergytype($energytype)
    {
        $this->energytype = $energytype;

        return $this;
    }

    /**
     * Get the value of the pokemons energytype
     *
     * @return string
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
     * @param array $attacks
     *
     * @return self
     */
    public function setAttacks(array $attacks)
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
     * Set the value of list of the energytypes which the pokemon is weak to
     *
     * @param array $weakness
     *
     * @return self
     */
    public function setWeakness(array $weakness)
    {
        $this->weakness = $weakness;

        return $this;
    }

    /**
     * Get the value of list of the energytypes which the pokemon is weak to
     *
     * @return array
     */
    public function getWeakness()
    {
        return $this->weakness;
    }

    /**
     * Set the value of list of the energytypes which the pokemon is resistant to
     *
     * @param array $resistance
     *
     * @return self
     */
    public function setResistance(array $resistance)
    {
        $this->resistance = $resistance;

        return $this;
    }

    /**
     * Get the value of list of the energytypes which the pokemon is resistant to
     *
     * @return array
     */
    public function getResistance()
    {
        return $this->resistance;
    }

>>>>>>> master
}

















<<<<<<< HEAD
public static function getPokebag(){
  $p = [];
  foreach (self::$pokebag as $pokemon){
    $p[] = $pokemon->getname();
  }
  print_r($p);
}

public static function addToPokebag($pokemon){
  if (count(self::$pokebag) == 10){
    print_r('max amount of pokemon in the bag has been reached');
  } else {
  self::$pokebag[] = $pokemon;
  print_r($pokemon->getName() . ' has been added to the bag');
}
}

public static function getFromPokebag($name){
  $pokemon = self::$pokebag[array_search($name, array_column(self::$pokebag, 'name'))];
  // print_r(self::$pokebag);

  return ($pokemon);
}

public static function emptyPokebag(){
  // unset(self::$pokebag);
  self::$pokebag=[];
}


}
=======
 ?>
>>>>>>> master
