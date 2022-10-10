<?php
//Exercici 1
//1,2
$num1 = 1;
$num2 = 2;

if ($num1 == $num2){
 
echo "El resultado es el doble ". $resultado = ($num1*$num1) + ($num2*$num2);
}else if ($num1 != $num2){

echo "El resultado es ". $resultado = ($num1) + ($num2);
}else{
echo "no funciona";
}

//3,2

$num1 = 3;
$num2 = 2;

if ($num1 == $num2){
 
echo "El resultado es el doble ". $resultado = ($num1*$num1) + ($num2*$num2);
}else if ($num1 != $num2){

echo "El resultado es ". $resultado = ($num1) + ($num2);
}else{
echo "no funciona";
}

//2,2

$num1 = 2;
$num2 = 2;

if ($num1 == $num2){
 
echo "El resultado es el doble ". $resultado = ($num1*$num1) + ($num2*$num2);
}else if ($num1 != $num2){

echo "El resultado es ". $resultado = ($num1) + ($num2);
}else{
echo "no funciona";
}

//Exercici 2

$string= 'wxyz';
$patterns = array();
$patterns[0] = '/wxyz/';
$replacements = array();
$replacements[0] = 'zyxw';
echo preg_replace($patterns, $replacements, $string);

$stringA= 'a';
$patterns = array();
$patterns[0] = '/a/';
$replacements = array();
$replacements[0] = 'a';
echo preg_replace($patterns, $replacements, $stringA);

$stringB= 'ab';
$patterns = array();
$patterns[0] = '/ab/';
$replacements = array();
$replacements[0] = 'ba';
echo preg_replace($patterns, $replacements, $stringB);
 ?>
