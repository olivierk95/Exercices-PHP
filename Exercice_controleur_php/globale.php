<?php

function getAnimal($postId)
{
    $database = dbConnect();
    $req = $database->query('SELECT * FROM information WHERE animal_id = "'. $postId .'"');
    global $row;
    $row = $req->fetch(PDO::FETCH_ASSOC);
    return $row;
}

function dbConnect()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=animals;charset=utf8', 'root', 'root');
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
} ?>