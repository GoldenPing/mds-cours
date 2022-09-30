<?php
namespace POO\transports;

require_once('IDisplayable.php');
require_once('Personne.php');

class Conducteur extends Personne implements IDisplayable
{
    // PHP 7.4
    private int $numPermis;

    /**
     * @param string $nom
     * @param string $prenom
     * @param int $age
     * @param Adresse $adresse
     * @param int $numPermis
     */
    public function __construct(string $nom, string $prenom, int $age, Adresse $adresse, int $numPermis)
    {
        parent::__construct($nom, $prenom, $age, $adresse);
        $this->numPermis = $numPermis;
    }

    /**
     * @return int
     */
    public function getNumPermis(): int
    {
        return $this->numPermis;
    }

    /**
     * @param int $numPermis
     */
    public function setNumPermis(int $numPermis): void
    {
        $this->numPermis = $numPermis;
    }

    /**
     * @return string
     */
    public function __toString() : string
    {
        return 'Conducteur ['.parent::__toString() . ', numéro permis : '.$this->numPermis.']';
    }
}