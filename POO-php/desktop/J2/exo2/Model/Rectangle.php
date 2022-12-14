<?php

namespace Exo2\Model;

require_once "ToolBox/Polygone.php";

use Exo2\ToolBox\Polygone;

class Rectangle extends Polygone
{

    public function __construct(string $color, string $name, array $segments)
    {
        parent::__construct($color, $name, $segments);
        $this->segments = $segments;
    }

    public function calcPerimetre()
    {
        return 2*$this->segments[0]->calcLongueur() + 2*$this->segments[1]->calcLongueur();
    }

    public function calcAire()
    {
       return $this->segments[0]->calcLongueur() * $this->segments[1]->calcLongueur();
    }

    public function __toString(): string
    {

        $s = "<h4>" . $this->getNameClass(self::class) . "</h4>";
        $s .= "<h6> Avec pour Perimètre : ". $this->calcPerimetre() . "</h6>";
        $s .= "<h6> Avec pour Aire : ". $this->calcAire() . "</h6>";
        $s .= parent::__toString()."<br>"; // TODO: Change the autogenerated stub
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