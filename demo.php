<?php
$note = [10, 15, 20,30];
$eleves = [
    'cm2' => ['Jean','Marc','Jane', 'Marion'],
    'cm1' => ['Emilie', 'Marcelin']
];

foreach ($eleves as $key => $value) {
    echo 'La classe ' . $key . ": \n" ;
   foreach ($value as $key ) {
      echo '- ' .$key . "\n";
   }
   echo "\n";
}