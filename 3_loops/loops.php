<?php 

echo "For cyklus\n\n";

for ($x = 0; $x <= 10; $x++) {
    echo "Hodnota \$x je: $x \n";
}


echo "\nCyklus while\n\n";

$x = 0;
while ($x <= 10) {
    echo "Hodnota \$x je: $x \n";
    $x++;
}


echo "\nCyklus do while\n\n";

$x = 0;
do {
    echo "Hodnota \$x je: $x \n";
    $x++;
} while ($x <= 0);


echo "\nCyklus foreach a prochazeni pole\n\n";


$colors = ['Cervena', 'Modra', 'Bila'];
/*
    Procházení pole pomocí foreache
*/

foreach ($colors as $color) {
    echo $color . "\n";
}

$array = [
    '1' => 'leden',
    '2' => 'unor',
    '3' => 'brezen'
];

foreach ($array as $key => $value) {
    echo "key: " . $key . " value: " . $value . "\n";
}


echo "\nCyklus for a prochazeni pole\n\n";
/*
    Alternativní prochazení pole pomocí for cyklu

    Pole colors je vlastne definovane jako:
    [ 0 => 'Cervena', 1 => 'Modra', 2 => 'Bila' ]
*/

for ($i = 0; $i < count($colors); $i++) {
    echo $colors[$i] . "\n"; // pomoci $colors[$i] pristupuji do pole pro prvek v poli pod klicem $i
}
