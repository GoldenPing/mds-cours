<a href="index.php?page=formAjoutSecteur">Ajouter</a>
<table border="1">
    <thead>
    <th>Nom</th>
    <th></th>
    <th></th>
    <th></th>
    </thead>
    <?php
    foreach ($data["liste"] as $datum) : ?>
        <tr>
            <td><?php
                echo $datum->libelle ?></td>
            <td><a href="index.php?page=modifSecteur&id=<?php
                echo $datum->id ?>">Modifier</a></td>

            <td><a href="index.php?page=supprimerSecteur&id=<?php
                echo $datum->id ?>">supprimer</a></td>
        </tr>
    <?php
    endforeach; ?>
    <?php
    if (isset($_SESSION['errors']['supprSecteur']) && !empty($_SESSION['errors']['supprSecteur'])) : ?>
        <p>
            <strong>
                <?php
                echo $_SESSION['errors']['supprSecteur'];
                $_SESSION['errors']['supprSecteur'] = [] ?>
            </strong>
        </p>
    <?php
    endif; ?>
</table>