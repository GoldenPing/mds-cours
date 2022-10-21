<?php

namespace Exo2\ToolBox;

class Segment extends Figure
{
    private array $points;

    public function __construct(string $color, string $name, array $points)
    {
        parent::__construct($color, $name);
        $this->points = $points;
    }

    public function __toString(): string
    {
        $str = parent::__toString();
        $str .= "<h5>" . parent::getNameClass(self::class) . "</h5>";
        $str .= "<h6> Avec pour longueur : ". $this->calcLongueur() . "</h6>";
        $str .= "<ul>";
        foreach (get_object_vars($this) as $key => $value) {
            if (is_array($value)) {
                $value = implode('___________________________ ', $value);
            }
            $str .= "<li>" . gettype($value) . " " . $key . " = " . $value . "</li>";
        }
        $str .= "</ul>";

        return $str;
    }

    public function calcLongueur(): float
    {
        $a = $this->points[0];
        $b = $this->points[1];
        $resX = $b->x + $a->x;
        $resY = $b->y + $a->y;
        $res = sqrt(
            $this->carre($resX) + $this->carre($resY)
        );
        return number_format($res,2);
    }

    public function carre($a)
    {
        return $a*$a;
    }
}