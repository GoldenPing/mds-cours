<?php

namespace tpNote\model\manager;

use PDOStatement;
use tpNote\model\entities\Entity;
use tpNote\model\entities\Secteur;
use tpNote\model\entities\Structure;

class StructureManager extends PDOManager
{

    public function findById(int $id): ?Entity
    {
        $stmt = $this->executePrepare("SELECT * FROM structure WHERE ID = :id", ['id' => $id]);
        $structure = $stmt->fetch();
        if (!$structure) {
            return null;
        }
        return new Structure(
            $structure['ID'],
            $structure['NOM'],
            $structure['RUE'],
            $structure['CP'],
            $structure['VILLE'],
            $structure['ESTASSO'],
            $structure['NB_DONATEURS'],
            $structure['NB_ACTIONNAIRES']
        );
    }

    public function find(): PDOStatement
    {
        $stmt = $this->executePrepare("SELECT * FROM structure", []);
        return $stmt;
    }

    public function findAll(int $pdoFecthMode): array
    {
        $stmt = $this->find();
        $strutures = $stmt->fetchAll($pdoFecthMode);
        $struturesEntities = [];
        foreach ($strutures as $struture) {
            $struturesEntities[] = new Structure(
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
        return $struturesEntities;
    }

    public function belongsToMany(int $id): array
    {
        $sql = "
            SELECT sec.*
            FROM structure AS st 
            JOIN secteurs_structures AS sec_st ON sec_st.ID_STRUCTURE = st.ID
            JOIN secteur AS sec ON sec.ID = sec_st.ID_SECTEUR
            WHERE st.ID = :id";

        $stmt = $this->executePrepare($sql, ['id' => $id]);
        $secteurs = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        $secteursEntities = [];
        foreach ($secteurs as $secteur) {
            $secteursEntities[] = new Secteur($secteur['ID'], $secteur['LIBELLE']);
        }
        return $secteursEntities;
    }

    public function assoc(int $idStructure, int $idSecteur)
    {
        $sql = 'INSERT INTO secteurs_structures (ID_STRUCTURE,ID_SECTEUR) VALUE (:idSt,:idSec)';
        $this->executePrepare($sql, ['idSt' => $idStructure, 'idSec' => $idSecteur]);
    }

    public function deassoc(int $id, int $secteur)
    {
        $sql = 'DELETE FROM secteurs_structures WHERE ID_STRUCTURE=:idSt AND ID_SECTEUR=:idSec';
        $this->executePrepare($sql, ['idSt' => $id, 'idSec' => $secteur]);
    }

    public function updateAssoc(int $secteur, int $idStructure, int $idOldSec)
    {
        $sql = "UPDATE secteurs_structures SET ID_SECTEUR=:secteur WHERE  ID_SECTEUR = :idOldSec AND ID_STRUCTURE=:idStructure";
        $this->executePrepare($sql, ['idStructure' => $idStructure, 'secteur' => $secteur, 'idOldSec' => $idOldSec]);
    }

    public function insert(Entity $e): PDOStatement
    {
        $sql = "INSERT INTO `structure`(`NOM`, `RUE`, `CP`, `VILLE`, `ESTASSO`, `NB_DONATEURS`, `NB_ACTIONNAIRES`) VALUES (:nom,:rue,:cp,:ville,:isAsso,:nbDonateurs,:nbActionnaires)";
        return $this->executePrepare($sql, [
            'nom' => $e->nom,
            'rue' => $e->rue,
            'cp' => $e->cp,
            'ville' => $e->cp,
            'isAsso' => $e->isAsso,
            'nbDonateurs' => $e->nbDonateurs,
            'nbActionnaires' => $e->nbActionnaires,
        ]);
    }

    public function update(Entity $e): PDOStatement
    {
        $sql = "UPDATE `structure` SET `NOM`=:nom,`RUE`=:rue,`CP`=:cp,`VILLE`=:ville,`ESTASSO`=:isAsso,`NB_DONATEURS`=:nbDonateurs,`NB_ACTIONNAIRES`=:nbActionnaires WHERE ID = :id";
        return $this->executePrepare($sql, [
            'nom' => $e->nom,
            'rue' => $e->rue,
            'cp' => $e->cp,
            'ville' => $e->cp,
            'isAsso' => $e->isAsso,
            'nbDonateurs' => $e->nbDonateurs,
            'nbActionnaires' => $e->nbActionnaires,
            'id' => $e->id

        ]);
    }
}