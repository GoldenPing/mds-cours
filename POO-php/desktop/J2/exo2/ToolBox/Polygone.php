<?php

namespace Exo2\ToolBox;

require_once ("Figure.php");

abstract class Polygone extends Figure implements Calcul
{
    private array $segments;

    public function __construct(string $color, string $name, array $segments)
    {
        parent::__construct($color, $name);
        $this->segments = $segments;
    }

}