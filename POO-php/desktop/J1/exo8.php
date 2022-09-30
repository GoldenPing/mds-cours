<?php
$values = [5,2,8,80,0,5];
$FIND = 5;

function search(array $values, int $find):array
{
    $res = [];
    foreach ($values as $key=>$value) {
        if ($value === $find){
            $res []= $key;
        }
    }
    return $res;
}


$arrayFind = search($values,$FIND);

function showArray(array $arrayFind):void
{
    echo "Indice trouvé </br>";
    foreach ($arrayFind as $find) {
        echo $find . "</br>";
    }

}

showArray($arrayFind);

