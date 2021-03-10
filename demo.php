<?php

use function PHPSTORM_META\type;

$tabCreneaux = [];
while (true) {
    $debut = (int)readline("Heure d'ouverture : ");
    $fin = (int)readline("Heure de fermeture : ");
    if ($debut < $fin && $debut !== 0 && $fin !== 0){
        array_push($tabCreneaux, $debut, $fin);
        $newCreneaux =  readline("Voulez vous saisir un nouveau crée ? o/n : ");
        if ($newCreneaux !== 'o') {
            foreach ($tabCreneaux as $key => $value) {
                if ($key % 2 === 0) { 
                    echo "L'heure d'ouverture est $value. L'heure de fermeture est : " . $tabCreneaux[$key+1] . "\n";
                }
            }
            return;
        }
    }
}
?>