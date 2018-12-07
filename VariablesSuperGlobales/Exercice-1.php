<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$adresse_ip = $_SERVER['REMOTE_ADDR'];
$serveur = $_SERVER['SERVER_NAME'];

echo $user_agent . "<br>" . $adresse_ip . "<br>" . $serveur;

?>