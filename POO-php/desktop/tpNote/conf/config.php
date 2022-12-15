<?php


// à configurer !
//------------------------------------------------------------------------
$host = '127.0.0.1';
$dbname = 'u751543619_mds_sql';
$port = '3306';
$user = 'u751543619_msqSQL';
$pass = 'Hop123456789';

$db = new PDO("mysql:host=$host;dbname=$dbname;port=$port", $user, $pass);


//------------------------------------------------------------------------


// NE PAS TOUCHER ! (en faite si car il ne faut pas stopper le progrés donc faites le mais en connaissance de cause)
spl_autoload_register(function ($class) {
    $class = getNameClass($class);
    if (strpos($class, "Controller") !== false) {
        include_once "controller/" . $class . ".php";
    } else {
        if (strpos($class, "Manager") !== false) {
            include_once "model/manager/" . $class . ".php";
        } else {
            include_once "model/entities/" . $class . ".php";
        }
    }
});


function db()
{
    global $db;
    return $db;
}

function getNameClass($class = 'a\b\C')
{
    if ($pos = strrpos($class, '\\')) {
        return substr($class, $pos + 1);
    }
    return $pos;
}