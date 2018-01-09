<?php

/*
    Manipulace se soubory

    PHPDoc: http://php.net/manual/en/ref.filesystem.php
*/


/*
    Ukládání obsahu do souboru
*/


$file_content = "Obsah meho prvniho souboru";
file_put_contents('./data/muj_prvni_soubor.txt', $file_content);



$file_content = "Jmeno,Prijmeni,Vek\n";
$file_content = $file_content . "Pavel,Novak,37";
file_put_contents('./data/osoby.csv', $file_content);


/*
    Čtení obsahu ze souboru
*/


$file_content = file_get_contents('./data/muj_prvni_soubor.txt');
var_dump($file_content);


/*
    Alternativní ukládání do souboru
*/


$file_name = "./data/alternativne_zpracovany_soubor.txt"; 
$file_handle = fopen($file_name, 'w') or die("Nemohu otevřít soubor"); 
$bytes = fwrite($file_handle, "Obsah alternativne zpracovaneho souboru");
fclose($file_handle);

echo "Pocet zapasany bajtu: $bytes\n";


/*
    Alternativní čtení ze souboru
*/


$file_handle = fopen($file_name, 'r') or die("Nemohu otevřít soubor");
$bytes = fwrite($file_handle, "Obsah alternativne zpracovaneho souboru");
$file_content = fread($file_handle, filesize($file_name));
fclose($file_handle);

echo $file_content;
