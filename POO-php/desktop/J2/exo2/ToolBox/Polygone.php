<?php

namespace Exo2\ToolBox;

require_once ("Figure.php");
require_once ("Calcul.php");

abstract class Polygone extends Figure implements Calcul
{
    private array $segments;

    public function __construct(string $color, string $name, array $segments)
    {
        parent::__construct($color, $name);
        $this->segments = $segments;
    }

    public function __toString(): string
    {
        $str = parent::__toString();
        $str .= "<h5>" . parent::getNameClass(self::class) . "</h5>";
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


}