<?php

namespace tpNote\model\manager;

use PDOStatement;
use tpNote\model\entities\Entity;
use tpNote\model\entities\Secteur;
use tpNote\model\entities\Structure;

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
        $sql = "DELETE FROM secteur WHERE ID = :id ";
        return $this->executePrepare($sql,['id'=>$id]);
    }

    public function belongsToMany(int $id): array
    {
        $sql = "
            SELECT st.*
            FROM secteur as sec  
            JOIN secteurs_structures AS sec_st ON sec_st.ID_SECTEUR = sec.ID
            JOIN structure AS st ON st.ID = sec_st.ID_STRUCTURE
            WHERE sec.ID = :id";
        $stmt = $this->executePrepare($sql, ['id' => $id]);
        $strutures = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        $secteursEntities = [];

        foreach ($strutures as $struture) {
            $secteursEntities[] = new Structure(
                $struture['ID'],
                $struture['NOM'],
                $struture['RUE'],
                $struture['CP'],
                $struture['VILLE'],
                $struture['ESTASSO'],
                $struture['NB_DONATEURS'],
                $struture['NB_ACTIONNAIRES']
            );
        }
        return $secteursEntities;
    }
}