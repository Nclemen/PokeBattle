<?php
 require 'init.php';

 $pikachu = new Pikachu('chuchu');
 $charmeleon = new Charmeleon('flint');

 $pikachu->attackPokemon($charmeleon, $pikachu->getAttacks()[0]);
 $charmeleon->attackPokemon($pikachu, $charmeleon->getAttacks()[1]);

 echo Pokemon::getPopulationHealth();
 //
 // $pikachu->attackPokemon($charmeleon, $pikachu->getAttacks()[0]);
 //
 echo Pokemon::getPopulationHealth();
