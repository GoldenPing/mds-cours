<?php

namespace POO\notesEtudiant;

class Module
{
    private string $nom;
    private int $coeff;

    /**
     * Module constructor.
     * @param $nom
     * @param $coeff
     */
    public function __construct(string $nom, int $coeff)
    {
        $this->nom = $nom;
        $this->coeff = $coeff;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return int
     */
    public function getCoeff(): int
    {
        return $this->coeff;
    }

    /**
     * @param int $coeff
     */
    public function setCoeff(int $coeff): void
    {
        $this->coeff = $coeff;
    }

    public function __toString() : string
    {
        return 'Module : '.$this->nom.', coeff : '.$this->coeff;
    }
}