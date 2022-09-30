<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <title>Notes étudiants</title>
</head>
<body>

<?php

require 'Etudiant.php';
require 'Module.php';
require 'MoyenneModule.php';
require 'MoyennesEtudiant.php';

use POO\notesEtudiant\Etudiant;
use POO\notesEtudiant\Module;
use POO\notesEtudiant\MoyenneModule;
use POO\notesEtudiant\MoyennesEtudiant;

$module1 = new Module('Anglais', 1);
$module2 = new Module('Economie', 2);
$module3 = new Module('PHP', 3);

$etudiant1 = new Etudiant('Durand', 'Jérôme', 22);
$moyenneModule1 = new MoyenneModule($etudiant1, $module1, 12);
$moyenneModule2 = new MoyenneModule($etudiant1, $module2, 14);
$moyenneModule3 = new MoyenneModule($etudiant1, $module3, 16);
$tMoyennes = [$moyenneModule1, $moyenneModule2, $moyenneModule3];
$notetud1 = new MoyennesEtudiant($tMoyennes);
echo '<p>'.$etudiant1.'<br/>'.$notetud1.'</p>';

$etudiant2 = new Etudiant('Dupont', 'Stéphane', '20');
$moyenneModule4 = new MoyenneModule($etudiant2, $module1, 13);
$moyenneModule5 = new MoyenneModule($etudiant2, $module2, 15);
$moyenneModule6 = new MoyenneModule($etudiant2, $module3, 17);
$notetud2 = new MoyennesEtudiant(array($moyenneModule4, $moyenneModule5, $moyenneModule6));
echo '<p>'.$etudiant2.'<br/>'.$notetud2.'</p>';
?>
</body>
