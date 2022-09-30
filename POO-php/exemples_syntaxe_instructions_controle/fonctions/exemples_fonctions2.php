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
