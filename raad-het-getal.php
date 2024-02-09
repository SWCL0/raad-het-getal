<?php

$raadGetal = rand(1, 100);
$gokken = 0;

echo "Geef een getal :)" . PHP_EOL;

while (true) {
    $invoer = readline();

    if ($invoer < 1) {
        echo "Getal tussen de 1 - 100!";
        exit;
    } else if ($invoer > 100) {
        echo "Getal tussen de 1 - 100!";
        exit;
    } elseif ($invoer < $raadGetal) {
        echo "Hoger!" . PHP_EOL;
    } elseif ($invoer > $raadGetal) {
        echo "Lager!" . PHP_EOL;
    } else {
        echo "Gefeliciteerd! Je hebt het getal goed geraden. Het getal was: $raadGetal." . PHP_EOL;
        break;
    }
    $gokken++;
}

echo "Je hebt $gokken keer gegokt!"


?>