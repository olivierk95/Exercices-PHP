<?php

?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body> 
        <form method="get" action="Exercice-3.php">
            <label>Nom :</label> <input name="nom" type="text"/>
            <label>Prenom :</label><input name="prenom" type="text"/>
            <input type="submit"/>
        </form>

    </body>
</html>

<?php
    $nom = $_GET['nom'];
    $prenom = $_GET['prenom'];
    echo "Bonjour " . $prenom . " " . $nom . "!";
?>