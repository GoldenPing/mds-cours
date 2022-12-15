<?php

namespace tpNote\model\entities;

use tpNote\model\manager\StructureManager;

class Structure extends Entity
{
    public string $nom, $rue, $cp, $ville;
    public bool $isAsso;
    public ?int $nbDonateurs, $nbActionnaires;

    /**
     * @param int|null $id
     * @param string $nom
     * @param string $rue
     * @param string $cp
     * @param string $ville
     * @param bool $isAsso
     * @param int $nbDonateurs
     * @param int $nbActionnaires
     */
    public function __construct(
        ?int $id,
        string $nom,
        string $rue,
        string $cp,
        string $ville,
        bool $isAsso,
        ?int $nbDonateurs,
        ?int $nbActionnaires
    ) {
        parent::__construct($id);
        $this->nom = $nom;
        $this->rue = $rue;
        $this->cp = $cp;
        $this->ville = $ville;
        $this->isAsso = $isAsso;
        $this->nbDonateurs = $nbDonateurs;
        $this->nbActionnaires = $nbActionnaires;
    }


    public function secteurs(): array
    {
        $manager = new StructureManager();
        return $manager->belongsToMany($this->id);
    }

}