<?php

echo "Zacatek\n"; 

if (true) {
    echo "If vetev prvni podminky\n";
}

echo "Za prvni podminkou\n";

if (false) {
    echo "If vetev druhe podminky\n";
} else {
    echo "Else vetev druhe podminky\n";
}

echo "Za druhou podminkou\n";

if (false) {
    echo "If vetev treti podminky\n";
} else if (false) {
    echo "Else If vetev treti podminky\n";
} else {
    echo "Else vetev treti podminky\n";
}

$a = 8;

echo "Promenna \$a ma hodnotu: " . $a;

if ($a > 8) {
    echo "Promenna \$a je vetsi nez 8\n";
} else if ($a < 8) {
    echo "Promenna \$a je mensi nez 8\n";
} else {
    echo "Promenna \$a je rovna 8\n";
}

if (is_numeric($a)) {
    echo "Promenna \$a obsahuje ciselnou hodnotu\n";
}

if (($a % 2) == 0) {
    echo "Promenna \$a je sude cislo\n";
} else {
    echo "Promenna \$a je liche cislo\n";
}

echo "Konec";
