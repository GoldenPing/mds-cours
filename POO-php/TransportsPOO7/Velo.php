<?php
namespace POO\transports;

require_once('AMoyenTransport.php');

class Velo extends AMoyenTransport {

    // PHP 7.4
	private string $type;

    /**
     * Velo constructor.
     * @param string $modele
     * @param string $capaciteMaxPassagers
     * @param string $type
     */
    public function __construct(string $modele, string $capaciteMaxPassagers, string $type)
    {
        parent::__construct($modele, $capaciteMaxPassagers);
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * Renvoie une chaine de caractères avec les attributs du vélo
     * @return string La représentation des attributs sous forme d'une chaine de caractères
     */
    public function __toString() : string
    {
        return 'Vélo ['.parent::getAsString().', type : ' . $this->type.']';
    }
}
?>