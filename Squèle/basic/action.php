<?php
require_once "db.php";


function allPizza(){
    $stmt = db()->prepare("SELECT * FROM pizza");
    $stmt->execute();
    $list= [];
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $list[] = $row;
    }
    return $list;
}

function addLike($id){
    $stmt = db()->prepare("
    UPDATE pizza SET 
        like_piz = like_piz + 1 
    WHERE id_piz = :id
    ");
    $stmt->bindValue('id',$id,PDO::PARAM_INT);
    $stmt->execute();
    header("Location : .");
}

function supprimer($id){
    $stmt = db()->prepare("DELETE FROM pizza WHERE id_piz=:id");
    $stmt->bindValue('id',$id,PDO::PARAM_INT);
    $stmt->execute();
    header("Location : .");
}

function insertPizza($name,$base,$prix,$ingre){
    $stmt = db()->prepare("INSERT INTO pizza VALUE (null,:name,:base,:prix,:ingre,0)");
    $stmt->bindValue('name',$name);
    $stmt->bindValue('base',$base);
    $stmt->bindValue('prix',$prix,PDO::PARAM_INT);
    $stmt->bindValue('ingre',$ingre);
    $stmt->execute();
    header("Location : .");
}