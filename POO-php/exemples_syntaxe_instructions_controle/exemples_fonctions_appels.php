<?php
require('./fonctions/exemples_fonctions.php');
// pas d'erreur
//require_once('./fonctions/exemples_fonctions.php');
// erreur, redéclaration
//include('./fonctions/exemples_fonctions2.php');
// erreur, fichier inexistant
//require('exemples_fonctions.php');

echo '<p>Dans script exemples_fonctions_appels.php : '.somme(1,2.3).'</p>';
$sum=somme2(4.2,5);
echo '<p>Dans script exemples_fonctions_appels.php : '.$sum.'</p>';
afficheALaLigne($sum*2+3);
afficheALaLigne2($sum*4+3.5);
afficheALaLigne2(3);

$s1=somme(1,2);
$nb1=3;
$nb2=4;
$s2=somme($nb1,$nb2);
afficheALaLigne($s1);
afficheALaLigne2($s2);
afficheALaLigne3(somme(6,4));
