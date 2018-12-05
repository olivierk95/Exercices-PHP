<?php

?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body> 
        <form method="post" action="Exercice-7.php">
            <label>Civilité :</label>
            <select name="civilite">
                <option value="Mr">Mr</option>
                <option value="Mme">Mme</option>
            </select>
            <label>Nom :</label> <input name="nom" type="text"/>
            <label>Prenom :</label><input name="prenom" type="text"/>
            <input type="file" name="file" />
            <input type="submit"/>
        </form>

    </body>
</html>

<?php
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $file = $_POST['file'];
    echo $prenom . " " . $nom . " a posté le fichier ". $file;
?>