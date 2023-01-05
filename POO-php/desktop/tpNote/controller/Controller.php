<?php

namespace tpNote\controller;

use tpNote\model\entities\Entity;
use tpNote\model\manager\PDOManager;
use PDO;
use PDOStatement;

abstract class Controller
{
    protected PDOManager $manager;

    /**
     * @return PDOManager
     */
    public function getManager(): PDOManager
    {
        return $this->manager;
    }

    /**
     * @param PDOManager $manager
     */
    public function setManager(PDOManager $manager): void
    {
        $this->manager = $manager;
    }

    /**
     * @param int $id
     * @return Entity
     */
    public function findById(int $id): ?Entity
    {
        return ($this->getManager()->findById($id));
    }

    /**
     * @return PDOStatement
     */
    public function find(): PDOStatement
    {
        return ($this->getManager()->find());
    }

    /**
     * @return array
     */
    public function findAll(): array
    {
        return ($this->getManager()->findAll(PDO::FETCH_ASSOC));
    }

    /**
     * @param Entity $o
     */
    public function insert(Entity $e): void
    {
        $this->getManager()->insert($e);
    }


    public function update(Entity $e): void
    {
        $this->getManager()->update($e);
    }

    public function delete(int $id):void{
        $this->getManager()->delete($id);
    }
    public function render($view, $d = null)
    {
        $data = $d;
        include "./view/part/header.php";
        include "./view/" . $view . ".php";
        include "./view/part/footer.php";
    }

    public function redirect($url)
    {
        header("Location: $url");
    }

}