<?php
 require 'init.php';

     function battleLog($battledata){
       $target = $battledata['target'];
       $attacker = $battledata['attacker'];
       $attack = $battledata['attack'];
       $dmgdlt = $battledata['damage'];

       print_r(
         '<pre>' . $attacker->getName() .  ' attacks ' . $target->getName() . ' using ' . $attack->getName() . '</pre>'.
         '<pre>' . $target->getName() . ' receives ' . $dmgdlt . ' points of damage </pre>'.
         '<pre>' . $target->getName() . 's health = ' . $target->getHealth() .
         '</br>' . $attacker->getName() . 's health = ' . $attacker->getHealth() . '</pre>'
         );
     }


 $pikachu = new Pikachu('chuchu');
 $charmeleon = new Charmeleon('flint');

 battleLog($pikachu->attackPokemon($charmeleon, $pikachu->getAttacks()[0]));
 battleLog($charmeleon->attackPokemon($pikachu, $charmeleon->getAttacks()[1]));
 echo "the population is " . Pokemon::getPopulation();
 echo "the average population health is " . Pokemon::getPopulationHealth();

 battleLog($pikachu->attackPokemon($charmeleon, $pikachu->getAttacks()[0]));

 //
 echo "the population is " . Pokemon::getPopulation();
 echo "the average population health is " . Pokemon::getPopulationHealth();

 // echo '<pre>' . print_r(Pokemon::getPokemonPc(), true);
