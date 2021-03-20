<?php

function bonjour($nom="Ibrahim") {
    return 'Bonjour ' . $nom . "\n";
}

$salutation =  bonjour();

echo $salutation;