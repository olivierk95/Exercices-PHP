<?php

setcookie('login', 'prout', time() + 60*60);
setcookie('motDePasse', 'prout', time() + 60*60);

echo $_COOKIE['login'] . "<br>" . $_COOKIE['mot_de_passe'];

echo "<a href='Exercice-4.php'>Lien vers la page 2</a>";

?>