<?php
function numbers($num1, $num2) {
    if ($num1 > $num2) {
        echo "Le premier nombre est plus grand";
    } elseif ($num1 < $num2) {
        echo "Le premier nombre est plus petit";
    } elseif ($num1 = $num2) {
        echo "Les deux nombres sont identiques";
    }
};

numbers(5,5);
?>