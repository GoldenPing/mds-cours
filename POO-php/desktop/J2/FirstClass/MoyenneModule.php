<?php

namespace FirstClass;


class MoyenneModule
{

    private Etudiant $etudiant;
    private Module   $module;
    private float    $moyenne;

    /**
     * @param Etudiant $etudiant
     * @param Module $module
     * @param float $moyenne
     */
    public function __construct(Etudiant $etudiant, Module $module, float $moyenne)
    {
        $this->etudiant = $etudiant;
        $this->module = $module;
        $this->moyenne = $moyenne;
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
    private function getNameClass($class = 'a\b\C') {
        if ($pos = strrpos($class, '\\')) return substr($class, $pos + 1);
        return $pos;
    }
}