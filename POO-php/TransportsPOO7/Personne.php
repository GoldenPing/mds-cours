<?php
namespace POO\transports;

//require_once()

class Personne //implements IDisplayable
{
    // PHP 7.4
    private string $nom;
    private string $prenom;
    private int $age;
    private Adresse $adresse;

    /**
     * @param string $nom
     * @param string $prenom
     * @param int $age
     * @param Adresse $adresse
     */
    public function __construct(string $nom, string $prenom, int $age, Adresse $adresse)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
        $this->adresse = $adresse;
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

    /**
     * @return string
     */
    public function __toString() : string
    {
        return 'Personne { nom : '.$this->nom.', prénom : '.$this->prenom.', âge : '.$this->age.
            ', adresse : '.$this->adresse. ' } ';
    }
}