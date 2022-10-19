<?php

namespace FirstClass;

class MoyenneEtudiant
{
    private array $moyennes;

    /**
     * @param array $moyennes
     */
    public function __construct(array $moyennes)
    {
        $this->moyennes = $moyennes;
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

    public function calculMoyenne():float
    {
        $totalCoef = 0;
        $totalMoy  = 0;
        foreach ($this->moyennes as $moyenne) {
            $totalCoef += $moyenne->module->coefficiant;
            $totalMoy  += $moyenne->moyenne * $moyenne->module->coefficiant;
        }
        $res = $totalMoy / $totalCoef;
        return $res;
    }
}