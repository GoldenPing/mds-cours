<?php
namespace POO\transports;

require_once('AMoyenTransport.php');

abstract class AMoyenTransportMotorise extends AMoyenTransport {

    // PHP 7.4
    private string $uniteEnergie;
    private float $consoMoyenne100Km;

    /**
     * AMoyenTransportMotorise constructor.
     * @param string $modele
     * @param int $capaciteMaxPassagers
     * @param string $uniteEnergie
     * @param float $consoMoyenne100Km
     */
    public function __construct(string $modele, int $capaciteMaxPassagers, string $uniteEnergie,
                                float $consoMoyenne100Km)
    {
        parent::__construct($modele, $capaciteMaxPassagers);
        $this->uniteEnergie = $uniteEnergie;
        $this->consoMoyenne100Km = $consoMoyenne100Km;
    }

    /**
     * @return string
     */
    public function getUniteEnergie() : string
    {
        return $this->uniteEnergie;
    }

    /**
     * @param string $uniteEnergie
     */
    public function setUniteEnergie(string $uniteEnergie) : void
    {
        $this->uniteEnergie = $uniteEnergie;
    }

    /**
     * @return float
     */
    public function getConsoMoyenne100Km() : float
    {
        return $this->consoMoyenne100Km;
    }

    /**
     * @param float $consoMoyenne100Km
     */
    public function setConsoMoyenne100Km(float $consoMoyenne100Km) : void
    {
        $this->consoMoyenne100Km = $consoMoyenne100Km;
    }

    /**
     * @return string
     */
    protected function getAsString() : string {
        return parent::getAsString().', unité d\'énergie : ' .
            $this->uniteEnergie . ', conso aux 100km : ' . $this->consoMoyenne100Km;
    }

    /**
     * @param $distanceEnKm
     * @return float
     */
    public function calculerConso(float $distanceEnKm) : float {
        return $distanceEnKm * $this->consoMoyenne100Km / 100;
    }

    //public abstract function __toString(): string;
}
?>