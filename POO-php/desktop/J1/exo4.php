<?php
$INT_NUM = 5;
$res = 0;
for ($i = 0; $i < $INT_NUM ; $i++){
    echo $res.'+'.$i.'='. $res + $i."</br>";
    $res += $i;
}