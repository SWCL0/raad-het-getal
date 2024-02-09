<?php

$raadGetal = rand(1, 100);

echo "Geef een getal :)" . PHP_EOL;



while (true) {
    $invoer = readline();

    if ($invoer < $raadGetal) {
        echo "Hoger!" . PHP_EOL;
    } elseif ($invoer > $raadGetal) {
        echo "Lager!" . PHP_EOL;
    } else {
        echo "Gefeliciteerd! Je hebt het getal goed geraden! Het getal was: $raadGetal";
        break;
    }
}



?>