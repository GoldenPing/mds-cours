<a href="index.php?page=formAjoutSecteur">Ajouter</a>
<table border="1">
    <thead>
    <th>Nom</th>
    </thead>
    <?php
    foreach ($data["liste"] as $datum) : ?>
        <tr>
            <td><?php
                echo $datum->libelle ?></td>
        </tr>
    <?php
    endforeach; ?>
</table>