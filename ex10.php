<?php
    $a=rand(0,1000);
    $x=0;
    while ($a%2!=1)
        {
            $x++;
            echo "$a n'est pas pair</br>";
            $a=rand(0,1000);
        }
    echo "Pour trouver que ce nombre $a est pair en a fait $x tentatives</br>";
    