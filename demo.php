<?php
$creneaux = [];

while (true) {
    $debut = (int)readline('Heure d\'ouverture : ');
    $fin = (int)readline('Heure de fermuture : ');
    if ($debut >= $fin) {
        echo 'Le créneaux ne peut pas etre enregistré car l\'heure dé' . $debut .'est supérieur à l\'heure de fermeture' . "\n";
    } else {
        $creneaux[] = [$debut, $fin];
        $action = readline('Voulez vous enregistrer un nouveau créneau (o/n) : ');
        if($action === 'n') {
            break;
        }
    }
}
$heure = (int)readline("A quelle heure voulez vous visitez le magasin ?");
$creneauTrouver = false;

    foreach ($creneaux as $creneau) {
            if ($heure > $creneau[0] && $heure < $creneau[1])$creneauTrouver = true; break;         
        }
if ($creneauTrouver) {
    echo 'Le magasin sera ouvert'. "\n";
} else {
    echo 'Désolé, le magasin sera fermé:(' . "\n";
}
