<?php
$values = [5,2,8,80,0,5];
$res = 0;
foreach ($values as $value) {
    echo $value."+".$res."</br>";
    $res += $value;
}
echo $res."</br>";