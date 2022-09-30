<?php

namespace ecommerce;

class Panier {
    
    private Client $client;
    private array $_lignesPanier;

    public function __construct(Client $_refClient, array $_lignesPanier) {
        $this->client = $_refClient;
        $this->_lignesPanier = $_lignesPanier;
    }

    /**
     * @return string
     */
    public function getClient(): Client
    {
        return $this->client;
    }

    /**
     * @param string $refClient
     */
    public function setClient(string $client): self
    {
        $this->client = $client;
        return $this;
    }

    /**
     * @return array
     */
    public function getLignesPanier(): array
    {
        return $this->_lignesPanier;
    }

    /**
     * @param array $lignesPanier
     */
    public function setLignesPanier(array $lignesPanier): self
    {
        $this->_lignesPanier = $lignesPanier;
        return $this;
    }

    public function ajouterLigne(LignePanier $uneLignePanier) : void {
        $this->_lignesPanier[]=$uneLignePanier;
    }

    public function getMontantTotal() : float {
        
        $montantTotal=0;
        
        foreach ($this->_lignesPanier as $lPanier) {
            $montantTotal += $lPanier->getMontant();
        }
        
        return $montantTotal;
    }

    public function __toString() : string
    {
        $s = '<p>Panier : '.$this->client.', lignes panier :<br/>';

        foreach ($this->_lignesPanier as $lPanier) {
            $s.= $lPanier;
            $s.='<br/>';
        }
        $s.='</p>';

        return($s);
    }
}
