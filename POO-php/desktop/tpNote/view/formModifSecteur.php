<form action="index.php?page=doModifSecteur" method="post">
    <input type="hidden" name="idSec" value="<?php echo $data['secteur']->id ?>">
    <label for="libelleSec">Libelle Secteur</label>
    <input type="text" name="libelleSec" id="libelleSec" value="<?php echo $data['secteur']->libelle ?>">
    <input type="submit" value="valider">
</form>