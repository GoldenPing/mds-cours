<form action="index.php?page=doModifStructure" method="post">
    <input type="hidden" name="idStr" value="<?php
    echo $data['structure']->id ?>">
    <div>
        <label for="nomStr">Nom Structure</label>
        <input type="text" name="nomStr" id="nomStr" value="<?php
        echo $data['structure']->nom ?>">
    </div>
    <div>
        <label for="rueStr">Rue Structure</label>
        <input type="text" name="rueStr" id="rueStr" value="<?php
        echo $data['structure']->rue ?>">
    </div>
    <div>
        <label for="cpStr">Code Postal Structure</label>
        <input type="text" name="cpStr" id="cpStr" value="<?php
        echo $data['structure']->cp ?>">
    </div>
    <div>
        <label for="villeStr">Ville Structure</label>
        <input type="text" name="villeStr" id="villeStr" value="<?php
        echo $data['structure']->ville ?>">
    </div>
    <div>
        <label for="assoStr">Est une association Structure</label>
        <input type="checkbox" name="assoStr" id="assoStr" <?php
        if ($data['structure']->isAsso) echo 'checked';?> >
    </div>
    <div>
        <label for="donaStr">Nombre de donateur Structure</label>
        <input type="text" name="donaStr" id="donaStr" value="<?php
        echo $data['structure']->nbDonateurs ?>">
    </div>
    <div>
        <label for="actStr">Nombre de actionnaire Structure</label>
        <input type="text" name="actStr" id="actStr" value="<?php
        echo $data['structure']->nbActionnaires ?>">
    </div>

    <input type="submit" value="valider">
</form>