<?php

/**
    sprintf PHPDoc: http://php.net/manual/en/function.sprintf.php
**/


// Formátování řetězců
$city = "Brno";
echo sprintf("Mesto: %s\n", $city);

$state = "Ceska Republika";
$population = 378327;
echo sprintf("Stat: %s, Mesto: %s, Pocet obyvatel: %d\n", $state, $city, $population);

// Formátování číslice na pevnou délku
$number = 74;
echo sprintf("%04d\n", $number);

// Desetiné číslo s zaokrouhlené na setiny
$float_number = 5.31649236;
echo sprintf("%.2f\n", $float_number);

// Převod čísla do dvojkové soustavy
echo sprintf("%b\n", $number);

// Převod čísla do osmičkové
echo sprintf("%o\n", $number);

// Převod čísla do šestnáctkové
echo sprintf("%X\n", $number);

// Převod na znak dnle ASCII tabulky
echo sprintf("%c\n", $number);



