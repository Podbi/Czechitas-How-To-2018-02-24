<?php

/*
    Demonstarace základních datových typů PHP
*/
$a = 1;
$b = 2.5;
$c = "FooBar";
$d = true; // boolean muze nabyvat hodnot pouze true a false
$e = array(1, 2, 3); // stary zapis
$f = [1, 2, 3];      // novy zapis
$g = ['key' => 'value', 'key1' => 'value'];

var_dump($a, $b, $c, $d, $e, $f);
