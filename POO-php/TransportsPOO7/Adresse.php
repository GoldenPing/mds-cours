<?php

namespace POO\transports;

class Adresse
{
    private string $rue;
    private string $ville;
    private string $codePostal;

    /**
     * @param string $rue
     * @param string $ville
     * @param string $codePostal
     */
    public function __construct(string $rue, string $ville, string $codePostal)
    {
        $this->rue = $rue;
        $this->ville = $ville;
        $this->codePostal = $codePostal;
    }

    /**
     * @return string
     */
    public function getRue(): string
    {
        return $this->rue;
    }

    /**
     * @param string $rue
     */
    public function setRue(string $rue): void
    {
        $this->rue = $rue;
    }

    /**
     * @return string
     */
    public function getVille(): string
    {
        return $this->ville;
    }

    /**
     * @param string $ville
     */
    public function setVille(string $ville): void
    {
        $this->ville = $ville;
    }

    /**
     * @return string
     */
    public function getCodePostal(): string
    {
        return $this->codePostal;
    }

    /**
     * @param string $codePostal
     */
    public function setCodePostal(string $codePostal): void
    {
        $this->codePostal = $codePostal;
    }

    public function __toString() : string
    {
        return 'Adresse { rue='.$this->rue.', ville='.$this->ville.', cp='.$this->codePostal.' }';
    }
}