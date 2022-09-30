<?php

namespace ecommerce;

class Client2
{
    private int $num;
    private string $nom;
    private string $prenom;

    /**
     * @param int $num
     * @param string $nom
     * @param string $prenom
     */
    public function __construct(int $num, string $nom, string $prenom)
    {
        $this->num = $num;
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    /**
     * @return int
     */
    public function getNum(): int
    {
        return $this->num;
    }

    /**
     * @param int $num
     */
    public function setNum(int $num): self
    {
        $this->num = $num;
        return $this;
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

    public function __toString() : string
    {
        return 'Client : '.$this->num.' - '.$this->nom.' '.$this->prenom;
    }
}