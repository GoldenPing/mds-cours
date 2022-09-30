<?php
namespace POO\transports;

require_once('AMoyenTransportMotorise.php');

class Camion extends AMoyenTransportMotorise {

    // PHP 7.4
	private int $nbRemorques;


    /**
     * Camion constructor.
     * @param string $modele
     * @param string $capaciteMaxPassagers
     * @param string $uniteEnergie
     * @param float $consoMoyenne100Km
     * @param int $nbRemorques
     */
    public function __construct(string $modele, string $capaciteMaxPassagers, string $uniteEnergie,
                                float $consoMoyenne100Km, int $nbRemorques)
    {
        parent::__construct($modele, $capaciteMaxPassagers, $uniteEnergie, $consoMoyenne100Km);
        $this->nbRemorques = $nbRemorques;
    }

    /**
     * @return int
     */
    public function getNbRemorques(): int
    {
        return $this->nbRemorques;
    }

    /**
     * @param int $nbRemorques
     */
    public function setNbRemorques(int $nbRemorques): void
    {
        $this->nbRemorques = $nbRemorques;
    }


    /**
     * @return string
     */
    public function __toString() : string
    {
        return 'Camion ['.parent::getAsString().', nbRemorques : ' .$this->nbRemorques.']';
    }
}
?>