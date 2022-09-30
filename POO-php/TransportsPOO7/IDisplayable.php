<?php
namespace POO\transports;

interface IDisplayable {
	/**
	 * Retourne une représentation lisible de l'objet
	 * @return string La représentation lisible de l'objet
	 */
	function __toString() : string;
}
?>
