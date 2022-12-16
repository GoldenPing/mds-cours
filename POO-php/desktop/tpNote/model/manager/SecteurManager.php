<?php

namespace tpNote\model\manager;

use PDOStatement;
use tpNote\model\entities\Entity;
use tpNote\model\entities\Secteur;

class SecteurManager extends PDOManager
{

    public function findById(int $id): ?Entity
    {
        $stmt = $this->executePrepare("SELECT * FROM secteur WHERE ID = :id", ['id' => $id]);
        $secteur = $stmt->fetch();
        if (!$secteur) {
            return null;
        }
        return new Secteur($secteur['ID'], $secteur['LIBELLE']);
    }

    public function find(): PDOStatement
    {
        $stmt = $this->executePrepare("SELECT * FROM secteur", []);
        return $stmt;
    }

    public function findAll(int $pdoFecthMode): array
    {
        $stmt = $this->find();
        $secteurs = $stmt->fetchAll($pdoFecthMode);
        $secteursEntity = [];
        foreach ($secteurs as $secteur) {
            $secteursEntity[] = new Secteur($secteur['ID'], $secteur['LIBELLE']);
        }
        return $secteursEntity;
    }

    public function insert(Entity $e): PDOStatement
    {
        $sql = "INSERT INTO secteur (LIBELLE) VALUE (:libelle)";
        return $this->executePrepare($sql, ['libelle' => $e->libelle]);
    }

    public function update(Entity $e): PDOStatement
    {
        $sql = "UPDATE secteur SET LIBELLE = :libelle WHERE ID = :id";
        return $this->executePrepare($sql, ['libelle' => $e->libelle, 'id'=>$e->id]);
    }

    public function delete(int $id): PDOStatement
    {

    }
}