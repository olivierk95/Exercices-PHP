<?php

?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body> 
        <form method="post" action="Exercice-3.php">
            <label>Civilité :</label>
            <select name="civilite">
                <option value="Mr">Mr</option>
                <option value="Mme">Mme</option>
            </select>
            <label>Nom :</label> <input name="nom" type="text"/>
            <label>Prenom :</label><input name="prenom" type="text"/>
            <input type="submit"/>
        </form>

    </body>
</html>

<?php
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    echo "Bonjour " . $prenom . " " . $nom . "!";
?>