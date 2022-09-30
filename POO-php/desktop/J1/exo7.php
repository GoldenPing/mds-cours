<?php
$values = [5,2,8,80,0,5];

function makeSum(array $values)
{
    $res = 0;
    foreach ($values as $value) {
        echo $value."+".$res."</br>";
        $res += $value;
    }
    return $res;
}

echo 'Resultat : '.makeSum($values)."</br>";



