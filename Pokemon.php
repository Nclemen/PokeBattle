<?php
class Pokemon {

  /**
  *string
  */
  public $name;

  /**
  *array
  */
  public $energytype;

  /**
  *int
  */
  public $hitpoints;

  /**
  *int
  */
  public $health;

  /**
  *array
  */
  public $attacks;

  /**
  *array
  */
  public $weakness;

  /**
  *array
  */
  public $resistance;

  public static $population = 0;

  protected static $pokemonPc = [];

  protected static $pokebag = [];


  public function __construct($name, $energytype, $hitpoints, $attacks, $weakness, $resistance){
    $this->name = $name;
    $this->energytype = $energytype;
    $this->hitpoints = $hitpoints;
    $this->health = $hitpoints;
    $this->attacks = $attacks;
    $this->weakness = $weakness;
    $this->resistance = $resistance;
    self::$population = self::$population + 1;
    self::$pokemonPc[] = $this;
}


public function __toString() {
    return json_encode($this);
 }

public function getName(){
    return $this->name;
}

public function setName($name){
    $this->name = $name;
}

public function pokedexData()
{
  echo '<h2>' . $this . '</h2>';
}

public function dmgTkn(?int $damage, $energytype){
    if(isset($this->weakness[$energytype]) || isset($this->resistance[$energytype]) ){
        if(isset($this->weakness[$energytype]) && isset($this->resistance[$energytype]) ){
            $this->health = $this->health - (($damage * $this->weakness[$energytype]) - $this->resistance[$energytype]);
        } elseif (isset($this->weakness[$energytype])) {
            $this->health = $this->health - ($damage * $this->weakness[$energytype]);
        } elseif (isset($this->resistance[$energytype])) {
            $this->health = $this->health - ($damage - $this->resistance[$energytype]);
        }
    } else {
    $this->health = $this->health - $damage;
    }
}

public function getWeakness(){
    return $this->weakness;
}

public function getHealth(){
    return intval($this->health);
}

public function fainted(){
    self::$population = self::$population - 1;
    return $this->health = 0;
}

public function getHitpoints(){
    return $this->hitpoints;
}

public function setHitpoints($hp){
    $this->hitpoints = $hp;
}

public function setWeakness(){
    return $this->weakness;
}

public function getEnergytype(){
    return $this->energytype;
}

public function getAtt($name){
    return $this->attacks[$name];
}

public function getAllAtt(){
    return json_encode($this->attacks);
}

public function setAtt($name, $dmg){
    $this->attacks[$name = $dmg ];
}

public function dmgDlt(){
    return ;
}

public function attack($target, $attack){
    $pokemon = $this;

    print_r($this->battleLog($target->getName()));

    print_r('<pre>' . $target->getName() . "</br>" . $target->getHealth() . '</pre>');
    $target->dmgTkn($attack,$pokemon->getEnergytype());
    if ($target->getHealth() <= 0){
        $target->fainted();
        print_r('<pre>' . $target->getName() . "</br>" . $target->getHealth() . '</pre>');
        print_r('<pre>' . $target->getName() . " Has fainted" . '</pre>');
    } else {
    print_r('<pre>' . $target->getName() . "</br>" . $target->getHealth() . '</pre>');
    }
}

public function battleLog($t){
    return  '</pre>' . $this->getName() . " Attacks " . $t . '</pre>';
}

public static function getPopulation(){
    return self::$population . "</br>";
}

public static function getPokemonPc(){
    return json_encode(self::$pokemonPc);
}

public static function getPopulationHealth(){
    $healthy = [];
    $average = 0;

    foreach(self::$pokemonPc as $pokemon){
        $hp = intval($pokemon->getHealth());
        if ($hp != 0){
            	$average = $average + $hp;
        }
    }
    print_r("the average population health is :" . $average / self::$population . "</br>");
}

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
