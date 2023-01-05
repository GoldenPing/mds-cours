<form action="index.php?page=doAjoutSecteurAssoc" method="post">
    <input type="hidden" name="idStructure" value="<?php
    echo $data['id'] ?>">
    <label for="secteur">Secteur : </label>
    <select id="secteur" name="secteur">
        <option value=".">.</option>
        <?php
        foreach ($data['secteurs'] as $secteur) : ?>
            <option value="<?php
            echo $secteur->id ?>"><?php
                echo $secteur->libelle ?></option>
        <?php
        endforeach; ?>

    </select>
    <input type="submit" value="valider">
</form>

<?php if (isset($_SESSION['errors']['erreurAssoc']) && !empty($_SESSION['errors']['erreurAssoc']) ) : ?>
    <p>
        <strong>
            <?php
            echo $_SESSION['errors']['erreurAssoc']; $_SESSION['errors']['erreurAssoc'] = [] ?>
        </strong>
    </p>
<?php endif; ?>