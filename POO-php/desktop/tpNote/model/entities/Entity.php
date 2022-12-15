<?php

namespace tpNote\model\entities;

abstract class Entity
{
    private ?int $id;

    /**
     * @param int|null $id
     */
    public function __construct(?int $id)
    {
        $this->id = $id;
    }

    public function __get($attr): mixed
    {
        return $this->$attr;
    }

    public function __set($attr, $value)
    {
        $this->$attr = $value;
    }
}