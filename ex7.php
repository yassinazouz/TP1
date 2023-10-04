<?php
    $a = 5;
    $b = 7;
    
    $result = $a <=> $b;
    
    switch ($result) {
        case -1:
            echo "$a est inférieur à $b";
            break;
        case 0:
            echo "$a est égal à $b";
            break;
        case 1:
            echo "$a est supérieur à $b";
            break;
        default:
            echo "Erreur de comparaison";
    }
    ?>