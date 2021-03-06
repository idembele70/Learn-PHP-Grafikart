<?php
$horaire = [];
$inputs= null;
$heureDebut= null;
$heureFin= null;
echo "Veuillez saisir un creneaux \n";
while (!(int)$heureDebut && !(int)$heureFin) {
    $inputs = readline('Heure de début s\'il vous plait : ');
if((int)$inputs) $heureDebut = (int)$inputs;
if ($heureFin) {
    echo "heure fin";
}
}