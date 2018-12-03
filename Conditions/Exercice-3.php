<?php
$age =27;
$genre = "femme";
if ($age >17 AND $genre == "homme") {
    echo "Vous êtes un homme et vous êtes majeur";
} elseif ($age <18 AND $genre == "homme") {
    echo "Vous êtes un homme et vous êtes mineur";
} elseif ($age >17 AND $genre == "femme") {
    echo "Vous êtes une femme et vous êtes majeur";
} elseif ($age <18 AND $genre == "femme") {
    echo "Vous êtes une femme et vous êtes mineur";
} else {
    echo "Menteur!";
};
?>