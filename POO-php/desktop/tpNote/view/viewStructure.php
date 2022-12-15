<?php

$structure = $data['one'] ?>
<p>
    <br>
    <?php
    if ($structure) { ?>
        Id : <?= $structure->id ?><br/>
        Nom : <?= $structure->nom ?><br/>
        Rue : <?= $structure->rue ?><br/>
        CP : <?= $structure->cp ?><br/>
        Ville : <?= $structure->ville ?><br/>
        Association : <?= $structure->isAsso ? 'oui' : 'non' ?><br/>
        <?php
        if ($structure->isAsso) {
            echo "Donateurs : " . $structure->nbDonateurs;
        } else {
            echo "Actionnaires : " . $structure->nbActionnaires;
        } ?>
        <?php
    } ?>
</p>
<p>Activité</p>
<a href="index.php?page=fromAjoutAssocSecteur&id=<?php
echo $structure->id ?>">Ajouter</a>
<ul>
    <?php
    foreach ($structure->secteurs() as $value) : ?>
        <li><?php
            echo $value->libelle ?>
            <a href="index.php?page=deassocSecteur&idStr=<?php
            echo $structure->id ?>&idSec=<?php
            echo $value->id ?>">Supprimer</a>
            <a href="index.php?page=formModifAssocSecteur&idStr=<?php
            echo $structure->id ?>&idSec=<?php
            echo $value->id ?>">Modifier</a>

        </li>
    <?php
    endforeach; ?>
</ul>
