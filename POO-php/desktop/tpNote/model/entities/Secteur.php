<?php

namespace tpNote\model\entities;

class Secteur extends Entity
{
    public string $libelle;

    /**
     * @param string $libelle
     */
    public function __construct(?int $id, string $libelle)
    {
        parent::__construct($id);
        $this->libelle = $libelle;
    }


}