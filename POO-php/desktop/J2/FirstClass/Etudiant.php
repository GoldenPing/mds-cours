<?php

namespace FirstClass;

class Etudiant
{
    private string $nom;
    private string $prenom;
    private int    $age;


    /**
     * @param string $nom
     * @param string $prenom
     * @param int $age
     */
    public function __construct(string $nom, string $prenom, int $age)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
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