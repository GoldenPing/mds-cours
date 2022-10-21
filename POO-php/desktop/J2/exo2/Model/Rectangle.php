<?php

namespace Exo2\Model;

use Exo2\ToolBox\Polygone;

class Rectangle extends Polygone
{

    public function __construct(string $color, string $name, array $segments)
    {
        parent::__construct($color, $name, $segments);
    }

    public function calcPerimetre()
    {
        // TODO: Implement calcPerimetre() method.
    }

    public function calcAire()
    {
        // TODO: Implement calcAire() method.
    }
}