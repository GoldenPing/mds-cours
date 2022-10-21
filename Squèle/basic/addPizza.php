<?php
require_once 'action.php';

var_dump($_POST);
$name = trim($_POST['name_piz']);
$base = trim($_POST['base_piz']);
$prix = trim($_POST['prix_piz']);
$ingre = trim($_POST['ingre_piz']);

insertPizza($name,$base,$prix,$ingre);
