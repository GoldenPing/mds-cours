<?php

namespace ecommerce;

class Produit {
    
    private string $_ref;
    private float $_prix;

    /**
     * Produit constructor.
     * @param $_ref
     * @param $_prix
     */
    public function __construct(string $_ref, float $_prix)
    {
        $this->_ref = $_ref;
        $this->_prix = $_prix;
    }

    /**
     * @return string
     */
    public function getRef(): string
    {
        return $this->_ref;
    }

    /**
     * @param string $ref
     */
    public function setRef(string $ref): self
    {
        $this->_ref = $ref;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrix(): float
    {
        return $this->_prix;
    }

    /**
     * @param float $prix
     */
    public function setPrix(float $prix): self
    {
        $this->_prix = $prix;
        return $this;
    }

    function __toString() : string
    {
        return 'Produit : référence='.$this->_ref.', prix='.$this->_prix;
    }
}
