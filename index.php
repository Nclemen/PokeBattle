<?php
require 'Pokemon.php';

$pikachu = new Pokemon(
    'pikachu',
    'lightning',
     60,
 [
     'Electric Ring' => 50,
     'Pika Punch' => 20
 ],
 [
     'Fire' => 1.5,
 ],
 [
    'Fighting' =>20
 ]);

 $charmeleon = new Pokemon(
    'charmeleon',
    'Fire',
     60,
 [
     'Head Butt' => 10,
     'Flare' => 30
 ],
 [
     'Water' => 2,
 ],
 [
    'Lightning' =>20
 ]);
// var_dump($pikachu);
// print_r('<pre>' . $charmeleon->getEnergytype() . "</br> " . $charmeleon->getAtt('Flare') . "</br> " . $charmeleon->getAllAtt() . '</pre>');
// print_r('<pre>' . $pikachu . '</pre>');
// print_r('<pre>' . $pikachu . '</pre>');
// print_r($pikachu->dmgTkn(15, 'Water'));
// print_r('<pre>' . $pikachu->getName() . "</br>" . $pikachu->getHealth() . '</pre>');
$pikachu->attack($charmeleon, $pikachu->getAtt('Electric Ring'));
$charmeleon->attack($pikachu, $charmeleon->getAtt('Flare'));
// print_r(Pokemon::getPopulation());

// print_r(Pokemon::getPokemonPc());

$charmeleon->attack($pikachu, $charmeleon->getAtt('Flare'));

print_r(Pokemon::getPopulationHealth());

// print_r(Pokemon::getPokemonPc());
// print_r(Pokemon::getPopulation());