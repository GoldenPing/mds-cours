<?php
// PHP5 -- fonction, peut être déclarée après l'appel
function somme($a, $b) {
	return $a+$b;
}

// à partir de PHP 5.7
function somme2(float $a, float $b) : float {
	$s=$a+$b;
	return $s;
}

// PHP5 -- procédure
function afficheALaLigne($val) {
	echo '<p><br/>'.$val.'<br/></p>';
}

// à partir de PHP 5.7 : conversion du paramètre en chaîne de caractères
function afficheALaLigne2(string $val) : void {
	echo '<p><br/>'.$val.'<br/></p>';
}

// à partir de PHP 5.7 : conversion du paramètre en décimal
function afficheALaLigne3(float $val) : void {
	echo '<p><br/>'.$val.'<br/></p>';
}

$s=somme(1, 2.3);
echo 'Dans script exemples_fonctions.php : ';
afficheALaLigne($s);
afficheALaLigne2($s*4+3.5);
afficheALaLigne3(3);
$s=somme(1, '2.3');
afficheALaLigne2($s);


//erreur ligne 4
//$s=somme(1, 'b');
//TypeError ligne 8 : erreur de conversion d'une chaine en float
//$s=somme2(1, 'b');

