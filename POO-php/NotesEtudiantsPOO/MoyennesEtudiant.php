<?php

namespace POO\notesEtudiant;

class MoyennesEtudiant
{
    private array $moyennes;

    /**
     * MoyennesEtudiant constructor.
     * @param $moyennes
     */
    public function __construct(array $moyennes)
    {
        $this->moyennes = $moyennes;
    }

    /**
     * @return array
     */
    public function getMoyennes(): array
    {
        return $this->moyennes;
    }

    /**
     * @param array $moyennes
     */
    public function setMoyennes(array $moyennes): void
    {
        $this->moyennes = $moyennes;
    }

    public function calculerMoyenneGenerale() : float
    {
        $sommeMoyennesCoeff=0;
        $sommeCoeff=0;

        foreach ($this->moyennes as $moyenne)
        {
            $sommeMoyennesCoeff = $sommeMoyennesCoeff + $moyenne->noteCoeff();
            /*$sommeMoyennesCoeff += ($moyenne->getModule()->getCoeff()
                * $moyenne->getMoyenne());*/
            $sommeCoeff = $sommeCoeff + $moyenne->getModule()->getCoeff();
        }

        return $sommeMoyennesCoeff/$sommeCoeff;
    }

    public function __toString() : string
    {
        $s='';
        foreach($this->moyennes as $moyenneModule) {
            $s.= $moyenneModule->getModule().', moyenne : '.$moyenneModule->getMoyenne().'<br/>';
        }
        $s.= 'Moyenne générale : '.round($this->calculerMoyenneGenerale(),2);
        return $s;
    }
}