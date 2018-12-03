<?php
$depa = array("01" => "Ain", "03" => "Allier", "07" => "Ardèche", "15" => "Cantak", "26" => "Drôme", "38" => "Isère", "42" => "Loire", "43" => "Haute-Loire", "63" => "Puy-de-Dôme", "69D" => "Rhône", "69M" => "Méropole de Lyon", "73" => "Savoie", "74" => "Haute-Savoie");

foreach($depa as $key => $value) {
    echo "Le département " . $value . " a le numéro " . $key . ".<br>";
};
?>