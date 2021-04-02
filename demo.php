<?php
function demander_oui_non()
{
    $reponse = readline('Voulez vous continuer oui ou non ?');
    if ($reponse === 'oui'){
        return $reponse;
    } else {
        return 'non';
    }
}

function demander_creneau($phrase = "Vos creneaux !"): array
{
    echo $phrase . "\n";
    $heureOuverture = null;
    $heureFermeture = null;
    while (true) {
        $heureOuverture = (int)readline("Veuillez saisir l'heure d'ouverture : ");
        if (0 <= $heureOuverture && $heureOuverture <= 23) break;
    }
    while (true) {
        $heureFermeture = (int)readline("Veuillez saisir l'heure de fermeture : ");
        if ($heureFermeture > $heureOuverture && $heureFermeture <= 23) break;
    }
    return [$heureOuverture, $heureFermeture];
}

function saisir_creneaux($phrase = 'Ton creneaux bg  !')
{
    $creneaux = [];
    while (true) {
        $creneaux[] =  demander_creneau($phrase);
        $choix = demander_oui_non();
        if ($choix === "non") break;
    }
    return $creneaux;
}

$un = saisir_creneaux();

var_dump($un);
