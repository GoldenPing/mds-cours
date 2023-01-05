<?php

namespace tpNote\model\entities;

use tpNote\model\manager\SecteurManager;

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

    public function structures(): array
    {
        $manager = new SecteurManager();
        return $manager->belongsToMany($this->id);
    }
}