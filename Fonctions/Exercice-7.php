<?php
function person($age, $genre) {
    if ($genre== "homme" && $age >= 18) {
        echo "Vous êtes un homme et vous êtes majeur";
    } elseif ($genre == "homme" && $age < 18) {
        echo "Vous êtes un homme et vous êtes mineur";
    } elseif ($genre == "femme" && $age >= 18) {
        echo "Vous êtes une femme et vous êtes majeur";
    } elseif ($genre == "femme" && $age < 18) {
        echo "Vous êtes une femme et vous êtes mineur";
    } else {
        echo "Vous n'existez pas";
    };
}

person(12, "homme");
?>