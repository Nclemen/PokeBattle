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
