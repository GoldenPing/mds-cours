<?php

namespace POO\notesEtudiant;

class MoyenneModule
{
    private Etudiant $etudiant;
    private Module $module;
    private float $moyenne;

    /**
     * MoyenneModule constructor.
     * @param $etudiant
     * @param $module
     * @param $moyenne
     */
    public function __construct(Etudiant $etudiant, Module $module, float $moyenne)
    {
        $this->etudiant = $etudiant;
        $this->module = $module;
        $this->moyenne = $moyenne;
    }

    /**
     * @return Etudiant
     */
    public function getEtudiant(): Etudiant
    {
        return $this->etudiant;
    }

    /**
     * @param Etudiant $etudiant
     */
    public function setEtudiant(Etudiant $etudiant): void
    {
        $this->etudiant = $etudiant;
    }

    /**
     * @return Module
     */
    public function getModule(): Module
    {
        return $this->module;
    }

    /**
     * @param Module $module
     */
    public function setModule(Module $module): void
    {
        $this->module = $module;
    }

    /**
     * @return float
     */
    public function getMoyenne(): float
    {
        return $this->moyenne;
    }

    /**
     * @param float $moyenne
     */
    public function setMoyenne(float $moyenne): void
    {
        $this->moyenne = $moyenne;
    }

    public function noteCoeff() : float
    {
        return $this->moyenne * $this->module->getCoeff();
    }

    public function __toString() : string
    {
       return $this->etudiant.'<br/>'.$this->module.', moyenne : '.$this->moyenne;
    }
}