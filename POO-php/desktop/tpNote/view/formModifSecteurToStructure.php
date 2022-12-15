<form action="index.php?page=doModifSecteurAssoc" method="post">
    <input type="hidden" name="idStructure" value="<?php echo $data['id'] ?>">
    <input type="hidden" name="idOldSec" value="<?php echo $data['secteur']->id ?>">
    <label for="secteur">Secteur : </label>
    <select id="secteur" name="secteur">
        <option value="<?php echo $data['secteur']->id?>"><?php echo $data['secteur']->libelle?></option>
        <?php
        foreach ($data['secteurs'] as $secteur) : ?>
            <option value="<?php echo $secteur->id?>"><?php echo $secteur->libelle?></option>
        <?php
        endforeach; ?>

    </select>
    <input type="submit" value="valider">
</form>