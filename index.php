<?php 
require 'animal.php';
require 'Kodok.php';
require 'Ape.php';

// $sheep = new Animal("shaun");
// // var_dump($sheep);
// echo $sheep->getNama().'<br>';
// echo $sheep->getLegs().'<br>';
// echo $sheep->getColdBlooded().'<br>';

$kodok = new Kodok("buduk");
$kodok->jump() ;
echo "<br>";
echo $kodok->getNama();
echo "<br>";

$sungokong = new Ape("kera sakti");
$sungokong->yell();
echo "<br>";
echo $sungokong->getNama();
echo "<br>";
 ?>