<?php
$values = [5,2,8,-5];
//test count msg erreur

if (count($values) === 0){
    echo 'Erreur tableau vide';
    die();
}
$res = $values[0] ?? 0;
foreach ($values as $value){
    if ($value > $res){
        $res = $value;
    }
}
echo $res;