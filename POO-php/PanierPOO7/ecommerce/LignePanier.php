<?php

namespace ecommerce;

class LignePanier {
    
    private Produit $_produit;
    private int $_quantite;
    
    public function __construct(Produit $_produit, int $_quantite) {
        $this->_produit = $_produit;
        $this->_quantite = $_quantite;
    }

    /**
     * @return Produit
     */
    public function getProduit(): Produit
    {
        return $this->_produit;
    }

    /**
     * @param Produit $produit
     */
    public function setProduit(Produit $produit): self
    {
        $this->_produit = $produit;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuantite(): int
    {
        return $this->_quantite;
    }

    /**
     * @param int $quantite
     */
    public function setQuantite(int $quantite): self
    {
        $this->_quantite = $quantite;
        return $this;
    }

    public function getMontant() : float {
        /*$prod = $this->_produit;
        $prix = $prod->get_prix();
        return $prix * $this->_quantite;*/
        return $this->_produit->getPrix()* $this->_quantite;
    }

    public function __toString() : string
    {
        return $this->_produit.', quantite='.$this->_quantite;
    }

}
