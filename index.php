<?php
// use base;

require 'classes/Pokemon.php';
require 'classes/Pikachu.php';
require 'classes/Charmeleon.php';

// use base\Energytype;
// use base\Pokemon;
// use base\pikachu as Pikachu;
// use base\Charmeleon;

 $pikachu = new Pikachu('chuchu');
 $charmeleon = new Charmeleon('flint');
 // echo '<pre>' . print_r($pikachu, true);
 // echo '<pre>' . print_r($charmeleon, true);
 var_dump($pikachu->getWeakness());

 // $pikachu->getName();
 //
 // // $pikachu->foo();
 // // $henk = 10;
 // echo '<pre>' . print_r($pikachu, true);
 ?>
