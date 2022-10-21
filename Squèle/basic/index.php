<?php
require_once "action.php";
$pizzas = allPizza();
?>

<!doctype html>
<html lang="en">
<head>
    <title>Pizza Gang</title>
</head>
<body>

<h1>Pizza Gang</h1>


<table border="1">
    <thead>
        <th>Nom</th>
        <th>Base</th>
        <th>Prix</th>
        <th>Ingredients</th>
        <th>Like</th>
        <th>Supprimer</th>
    </thead>

    <?php

    foreach ($pizzas as $pizza) {
        echo "<tr>";
        echo "<td>".$pizza['name_piz']."</td>";
        echo "<td>".$pizza['base_piz']."</td>";
        echo "<td>".$pizza['prix_piz']."</td>";
        echo "<td>";
        echo "<ul>";
        $ingre = explode(',',$pizza['ingre_piz']);
        foreach ($ingre as $value) {
            echo "<li>".$value."</li>";
        }
        echo "</ul>";
        echo "</td>";
        echo "<td>".$pizza['like_piz'].
        
            "
            <a href='like.php?id=".$pizza['id_piz']."'>+</a>
            </td>";
        echo "<td><a href='supprimer.php?id=".$pizza['id_piz']."'>Supprimer</a></td>";
        echo "</tr>";
    }
    ?>
</table>

<form action="addPizza.php" method="post">
    <div>
        <label for="name_piz">Nom de la Pizza : </label>
        <input type="text" name="name_piz" id="name_piz">
    </div>

    <div>
        <label for="base_piz">Base de la Pizza : </label>
        <input type="text" name="base_piz" id="base_piz">
    </div>

    <div>
        <label for="prix_piz">Prix de la Pizza : </label>
        <input type="text" name="prix_piz" id="prix_piz">
    </div>

    <div>
        <label for="ingre_piz">Ingredient de la Pizza : (les séparer par une ,)</label>
        <input type="text" name="ingre_piz" id="ingre_piz">
    </div>

    <input type="submit" value="Inserer">
</form>

</body>
</html>



