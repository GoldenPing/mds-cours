<?php

namespace POO\transports;

class Avion extends AMoyenTransportMotorise
{
    private int $nbMoteurs;

    public function __construct(string $modele, int $capaciteMaxPassagers,
                                string $uniteEnergie, float $consoMoyenne100Km, int $nbMoteurs)
    {
        parent::__construct($modele, $capaciteMaxPassagers, $uniteEnergie, $consoMoyenne100Km);
        $this->$nbMoteurs=$nbMoteurs;
    }

    /**
     * @return int
     */
    public function getNbMoteurs(): int
    {
        return $this->nbMoteurs;
    }

    /**
     * @param int $nbMoteurs
     */
    public function setNbMoteurs(int $nbMoteurs): void
    {
        $this->nbMoteurs = $nbMoteurs;
    }

    /**
     * @return string
     */
    public function __toString() : string
    {
        return 'Avion ['.parent::getAsString().', nbMoteurs : ' .$this->nbMoteurs.']';
    }

}