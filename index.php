<?php
// use base;

require 'classes/Pokemon.php';
require 'classes/Pikachu.php';
require 'classes/Charmeleon.php';

// use base\Energytype;
use base\Pokemon;
// use base\pikachu as Pikachu;
// use base\Charmeleon;

 $pikachu = new Pikachu('chuchu');
 $charmeleon = new Charmeleon('flint');
 echo '<pre>' . print_r($charmeleon->getEnergytype()->getName(), true);
 echo '<pre>' . print_r($pikachu->getResistance()->getValue(), true);

 $pikachu->attackPokemon($charmeleon, $pikachu->getAttacks()[0]);
 $charmeleon->attackPokemon($pikachu, $charmeleon->getAttacks()[1]);


 echo Pokemon::getPopulationHealth();

 $pikachu->attackPokemon($charmeleon, $pikachu->getAttacks()[0]);

 echo Pokemon::getPopulationHealth();

 // $pikachu->attackPokemon($charmeleon, $pikachu->getAttacks()[0]);
 // var_dump($pikachu->getWeakness());
 // var_dump($pikachu->getEnergytype());

 // $pikachu->getName();
 //
 // // $pikachu->foo();
 // // $henk = 10;
 // echo '<pre>' . print_r($pikachu, true);
