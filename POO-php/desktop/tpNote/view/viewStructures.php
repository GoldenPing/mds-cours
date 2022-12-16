<a href="index.php?page=addStructure">Ajouter</a>
<table border="1">
    <thead>
    <th>Nom</th>
    <th>Association</th>
    <th>En savoir plus</th>
    </thead>
    <?php
    foreach ($data["liste"] as $datum) : ?>
        <tr>
            <td><?php
                echo $datum->nom ?></td>
            <td><?php
                echo ($datum->isAsso) ? "OUI" : "NON" ?></td>
            <td><a href="index.php?page=oneStructure&id=<?php
                echo $datum->id ?>">Détails</a></td>
            <td><a href="index.php?page=modifStructure&id=<?php
                echo $datum->id ?>">Modifier</a></td>
            <td><a href="index.php?page=supprimerStructure&id=<?php
                echo $datum->id ?>">supprimer</a></td>
        </tr>
    <?php
    endforeach; ?>
</table>