<?php
namespace POO\transports;

require_once('IDisplayable.php');

abstract class AMoyenTransport implements IDisplayable {

    // PHP 7.4
    private string $modele;
    private int $capaciteMaxPassagers;

    /**
     * AMoyenTransport constructor.
     * @param string $modele Modele du moyen de transport
     * @param int $capaciteMaxPassagers
     */
    public function __construct(string $modele, int $capaciteMaxPassagers)
    {
        $this->modele = $modele;
        $this->capaciteMaxPassagers = $capaciteMaxPassagers;
    }

    /**
     * @return string
     */
    public function getModele(): string
    {
        return $this->modele;
    }

    /**
     * @param string $modele
     */
    public function setModele(string $modele): void
    {
        $this->modele = $modele;
    }

    /**
     * @return int
     */
    public function getCapaciteMaxPassagers() : int
    {
        return $this->capaciteMaxPassagers;
    }

    /**
     * @param int $capaciteMaxPassagers
     */
    public function setCapaciteMaxPassagers(int $capaciteMaxPassagers): void
    {
        $this->capaciteMaxPassagers = $capaciteMaxPassagers;
    }

    /**
     * @return string
     */
    protected function getAsString() : string {
        return 'modele : ' . $this->modele . ', capacité passagers : ' .
            $this->capaciteMaxPassagers;
    }

    //public abstract function __toString() : string;
}
?>