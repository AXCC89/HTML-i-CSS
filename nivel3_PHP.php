<?php
//Exercici 1

$entrada1 = 'H e l l o w o r l d';
print_r(explode(' ', $entrada1));

//Exercici 2

$entrada1 = array ("Hello", "world","Hello", "world");
print_r(array_count_values($entrada1));

//Exercici 3

$entrada = array (10, 20, 30, 40, 50);
unset($entrada[3]);
var_export ($entrada);
?>

