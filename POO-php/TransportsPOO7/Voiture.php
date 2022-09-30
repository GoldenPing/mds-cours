<?php
namespace POO\transports;

require_once('AMoyenTransportMotorise.php');

class Voiture extends AMoyenTransportMotorise {

    // PHP 7.4
    private int $nbPortes;

    /**
     * Voiture constructor.
     * @param string $_modele
     * @param string $_capaciteMaxPassagers
     * @param string $_uniteEnergie
     * @param float $_consoMoyenne100Km
     * @param int $_nbPortes
     */
    public function __construct(string $modele, string $capaciteMaxPassagers,
                                string $uniteEnergie, float $consoMoyenne100Km, int $nbPortes)
    {
        parent::__construct($modele, $capaciteMaxPassagers, $uniteEnergie, $consoMoyenne100Km);
        $this->nbPortes = $nbPortes;
    }

    /**
     * @return int
     */
    public function getNbPortes(): int
    {
        return $this->nbPortes;
    }

    /**
     * @param int $nbPortes
     */
    public function setNbPortes(int $nbPortes): void
    {
        $this->nbPortes = $nbPortes;
    }

    /**
     * @return string
     */
    public function __toString() : string
    {
        return 'Voiture ['.parent::getAsString().', nb portes : '.$this->nbPortes.']';
    }
}
?>