<?php

namespace POO\notesEtudiant;

class Etudiant
{
    private string $nom;
    private string $prenom;
    private int $age;

    /**
     * Etudiant constructor.
     * @param $nom
     * @param $prenom
     * @param $age
     */
    public function __construct(string $nom, string $prenom, int $age)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
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
     * @return string
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom(string $prenom): void
    {
        $this->prenom = $prenom;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function __toString() : string
    {
        return 'Etudiant - nom : '.$this->nom.', prénom : '.$this->prenom.', âge : '.$this->age;
    }
}