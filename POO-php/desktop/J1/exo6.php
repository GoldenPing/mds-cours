<?php
$values = [5,2,8,80,0,5];
$FIND = 5;
$res = [];
foreach ($values as $key=>$value) {
     if ($value === $FIND){
        $res []= $key;
     }
}

echo "Indice trouvé </br>";
foreach ($res as $re) {
    echo $re . "</br>";
}