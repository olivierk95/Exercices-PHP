<?php

$animals = array("Impala", "Crocodile", "Elephant", "Lion", "Tiger");

echo '<nav class="navbar navbar-light"><form class="form-inline" method="get" action="index.php">';
foreach ($animals as $animal) {
    echo '<button class="btn btn-sm animal-link" name="' . $animal . '" id="' . $animal . '">' . $animal . '</button>';
};
echo '</form></nav>';

  