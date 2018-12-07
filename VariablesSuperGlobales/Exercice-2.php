<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
    </head>
    <body> 
        <form method="post" action="Exercice-2.php">
            <label>Nom :</label> <input name="nom" type="text"/>
            <label>Prenom :</label><input name="prenom" type="text"/>
            <label>Age :</label><input name="age" type="text"/>
            <input type="submit"/>
        </form>
    
        <a href="Exercice-2bis.php">Aller à la page suivante</a>
    </body>
</html>

<?php
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age']; 
    
    $_SESSION['nom']= $nom;
    $_SESSION['prenom']= $prenom;
    $_SESSION['age']= $age;
?>