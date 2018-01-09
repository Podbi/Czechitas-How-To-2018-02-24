<?php

/******************************
 
   DEKLARACE FUNKCÍ

*******************************/

/*
    Funkce bez parametru
*/
function printGreetings() {
    echo "Ahoj\n";
}


/*
    Funkce s parametrem
*/

function printVariable($variable) {
    echo $variable . "\n";
}

function greetings($name) {
    echo "Ahoj $name\n";
}

/*
    Předání parametru hodnotou
*/
function subtractOne($number) {
    return $number - 1;
}


/*
    Předání parametru odkazem
*/
function addOne(&$number) {
    $number = $number - 1;
}

/***********************************

    KONEC DEKLARACE FUNKCI
    
***********************************/

/**********************************

    VOLÁNÍ FUNKCÍ

***********************************/

printGreetings();
printVariable(3.14);
greetings("Vašek");

$numberVariable = 10;
echo "Hodnota promenne \$numberVariable pred volanim funkce odectiJednicku: $numberVariable\n";

$numberVariable = subtractOne($numberVariable);

echo "Hodnota promenne \$numberVariable po volanim funkce odectiJednicku: $numberVariable\n";


echo "Hodnota promenne \$numberVariable pred volanim funkce prictiJednicku: $numberVariable\n";

addOne($numberVariable);

echo "Hodnota promenne \$numberVariable po volanim funkce prictiJednicku: $numberVariable\n";
