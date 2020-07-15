<?php 

require ('src/Character.php');
require ('src/Archer.php');

$hero = new Character("Gandalf", "vous ne passerez pas !!"); //on instancie l'objet
$vilain = new Character ("orc", "wargh");
//echo $hero->getWarcry();
$elfe = new Archer("begolas", "Pour Arwen", 25);

echo $vilain->hp . "<br>";
$elfe->rangeAttack($vilain);

echo $vilain->hp . "<br>";