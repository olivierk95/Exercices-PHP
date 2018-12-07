<?php

$login = $_POST['login'];
$mot_de_passe = $_POST['motDePasse'];

setcookie('login', $login, time() + 60*60);
setcookie('motDePasse', $mot_de_passe, time() + 60*60);

?>

<!DOCTYPE html>
<html>
    <head>
    </head>
    <body> 
        <form method="post" action="Exercice-3.php">
            <label>Login :</label><input name="login" type="text"/>
            <label>Mot de passe :</label><input name="motDePasse" type="password"/>
            <input type="submit"/>
        </form>
    
        <a href="Exercice-4.php">Aller à la page suivante</a>
    </body>
</html>

