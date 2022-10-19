<?php

require "FirstClass/Etudiant.php";
require "FirstClass/Module.php";
require "FirstClass/MoyenneModule.php";
require "FirstClass/MoyenneEtudiant.php";
use FirstClass\Etudiant;
use FirstClass\Module;
use FirstClass\MoyenneEtudiant;
use FirstClass\MoyenneModule;

$e = new Etudiant("Rambo","John",15);

echo $e;

$m = new Module("Math",2);
$m2 = new Module("Fr",4);
$m3 = new Module("Ang",3);
echo $m;

$mm = new MoyenneModule($e,$m,10.33);

echo $mm;

$moyennes = [
    $mm,
    new MoyenneModule($e,$m2,15.65),
    new MoyenneModule($e,$m3,16.563)
];

$me = new MoyenneEtudiant($moyennes);

echo $me;

echo "moyenne : ". $me->calculMoyenne();



