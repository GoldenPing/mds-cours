<?php

namespace tpNote\model\manager;

use tpNote\model\entities\Entity;
use PDOException;
use PDOStatement;

abstract class PDOManager
{
    protected function executePrepare(string $req, array $params): PDOStatement
    {
        $conn = null;
        try {
            $conn = db();
            $stmt = $conn->prepare($req);
            $res = $stmt->execute($params);
            return $stmt;
        } catch (PDOException $ex) {
            throw $ex;
        } finally {
            if ($conn != null) {
                $conn = null;
            }
        }
    }

    public abstract function findById(int $id): ?Entity;

    public abstract function find(): PDOStatement;

    public abstract function findAll(int $pdoFecthMode): array;

    public abstract function insert(Entity $e): PDOStatement;

    public abstract function update(Entity $e): PDOStatement;
}