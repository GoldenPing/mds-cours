<?php

namespace Exo2\Model;

use Exo2\ToolBox\Calcul;
use Exo2\ToolBox\Figure;
use Exo2\ToolBox\Point;
use Exo2\ToolBox\Segment;

class Cercle extends Figure implements Calcul
{

    protected Point $point;
    protected Segment $segment;

    public function __construct(string $color, string $name, Point $point, Segment $segment)
    {
        parent::__construct($color, $name);
        $this->point = $point;
        $this->segment = $segment;
    }

// base*hauteur/2 = aire tri
    public function calcPerimetre()
    {
        return $this->segment->calcLongueur() * 2 * pi();
    }

    public function calcAire()
    {
        return $this->segment->calcLongueur() * $this->segment->calcLongueur() / pi();
    }

    public function __toString(): string
    {
        $s = "<h4>" . $this->getNameClass(self::class) . "</h4>";
        $s .= "<h6> Avec pour Perimètre : ". $this->calcPerimetre() . "</h6>";
        $s .= "<h6> Avec pour Aire : ". $this->calcAire() . "</h6>";
        $s .= parent::__toString()."<br>";
        $s .= "<ul>";
        foreach (get_object_vars($this) as $key => $value) {
            if (is_array($value)) {
                $value = implode('___________________________ ', $value);
            }
            $s .= "<li>" . gettype($value) . " " . $key . " = " . $value . "</li>";
        }
        $s .= "</ul>";
        return $s;
    }
}