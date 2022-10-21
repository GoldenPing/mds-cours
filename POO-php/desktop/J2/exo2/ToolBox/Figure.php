<?php

namespace Exo2\ToolBox;

abstract class Figure
{
    private string $color;
    private string $name;

    /**
     * @param string $color
     * @param string $name
     */
    public function __construct(string $color, string $name)
    {
        $this->color = $color;
        $this->name = $name;
    }


    public function draw()
    {
        return "Dessin de $this->name en $this->color...";
    }

    public function __get(string $name)
    {
        return $this->$name;
    }

    public function __set(string $name, $value): void
    {
        $this->$name = $value;
    }

    public function __toString(): string
    {

        $s = "<h4>" . $this->getNameClass(self::class) . "</h4>";
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

    protected function getNameClass($class = 'a\b\C')
    {
        if ($pos = strrpos($class, '\\')) return substr($class, $pos + 1);
        return $pos;
    }
}