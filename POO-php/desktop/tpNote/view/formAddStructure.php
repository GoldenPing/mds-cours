<form action="index.php?page=doAjoutStructure" method="post">

    <div>
        <label for="nomStr">Nom Structure</label>
        <input type="text" name="nomStr" id="nomStr" >
    <div>
        <label for="rueStr">Rue Structure</label>
        <input type="text" name="rueStr" id="rueStr" >
    <div>
        <label for="cpStr">Code Postal Structure</label>
        <input type="text" name="cpStr" id="cpStr"
    <div>
        <label for="villeStr">Ville Structure</label>
        <input type="text" name="villeStr" id="villeStr"</div>
    <div>
        <label for="assoStr">Est une association Structure</label>
        <input type="checkbox" name="assoStr" id="assoStr">
    </div>
    <div>
        <label for="donaStr">Nombre de donateur Structure</label>
        <input type="text" name="donaStr" id="donaStr"</div>
    <div>
        <label for="actStr">Nombre de actionnaire Structure</label>
        <input type="text" name="actStr" id="actStr" >
    </div>

    <input type="submit" value="valider">
</form>

<?php
if (isset($_SESSION['errors']['addStructure'])){
    echo implode('</br>',$_SESSION['errors']['addStructure']);
}
?>