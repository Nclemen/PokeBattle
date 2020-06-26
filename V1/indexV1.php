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

Pokemon::getPopulationHealth();
$pikachu->attack($charmeleon, $pikachu->getAtt('Electric Ring'));
Pokemon::getPopulationHealth();
$charmeleon->attack($pikachu, $charmeleon->getAtt('Flare'));
Pokemon::getPopulationHealth();
$charmeleon->attack($pikachu, $charmeleon->getAtt('Flare'));
Pokemon::getPopulationHealth();
// print_r(Pokemon::getPopulationHealth());
