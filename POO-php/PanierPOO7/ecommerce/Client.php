<?php

namespace ecommerce;

class Client
{
    private string $_num;
    private string $_nom;
    private string $_prenom;

    /**
     * Client constructor.
     * @param $_num
     * @param $_nom
     * @param $_prenom
     */
    public function __construct(string $_num, string $_nom, string $_prenom)
    {
        $this->_num = $_num;
        $this->_nom = $_nom;
        $this->_prenom = $_prenom;
    }

    /**
     * @return string
     */
    public function getNum(): string
    {
        return $this->_num;
    }

    /**
     * @param string $num
     */
    public function setNum(string $num): self
    {
        $this->_num = $num;
        return $this;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->_nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): self
    {
        $this->_nom = $nom;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrenom(): string
    {
        return $this->_prenom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom(string $prenom): self
    {
        $this->_prenom = $prenom;
        return $this;
    }

    public function __toString() : string
    {
        return 'client '.$this->_num.' ('.$this->_nom.' '.$this->_prenom.')';
    }
}