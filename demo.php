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

echo 'Le magasin est ouvert de';
foreach ($creneaux as $k => $creneau) {
    // echo $creneau[0] . 'h à' . $creneau[1] . 'h \n'; 
    if ($k > 0) {
        echo ' et de ';
    }
    echo " {$creneau[0]}h à {$creneau[1]}h";
}