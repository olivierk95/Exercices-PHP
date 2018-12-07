<?php
session_start();

echo 'Bonjour ' . $_SESSION['prenom'] . " " . $_SESSION['nom'] . ", tu as " . $_SESSION['age'] . " ans";
?>