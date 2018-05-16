<?php

$numero = 50;
$texto = "<br>esto es un texto";
$bolean = true;

echo $numero;
echo $texto;
echo "<br>{$bolean}";

define ("saludo","hola, como estas?");
define ("PI",3.1416);


echo saludo."mi numero favorito es:".PI;
//ARRAYS
//Arrays predefinidos
$predefinido = array("elemento 1", 3, "element 3");

echo  $predefinido [2];

//Arrays personalizados

$personalizado = array('clave1' =>"elemento 1" , 'clave2' =>2  );

echo "<br>{$personalizado['clave2']}";
echo "<br>" . $personalizado['clave1'];

// OPERADORES Y SUS TIPOS
//ejemplos operadores aritmética
echo"<br>";
$adicion  = 4 + 4;

$multiplicación = $adicion * 2;

echo $adicion;
echo "<br>";
echo $multiplicación;

//Operador de asignaciónot
echo "<br>";

$valor1 = "hola";
$valor2 = 15;

echo $valor1;
echo "<br>";
echo $valor2;

//Operador de cadena (.)
echo "<br>";
$texto = "yo tengo". 25 . "años";

echo $texto;

//Operadores de comparación

echo "<br>";
echo (4 <= 6);
echo "<br>";
echo (5 === "5");

//Operador de errores @

@ define(); // Esto produce un error

//operador de incremento (++)
$variable = 3;
echo $variable++;
echo "<br>";
echo $variable;

//Operadores de lógica
echo "<br>";
echo ((2 == 2) && (2 != 1));
echo "<br>";
echo ((3 == 3) || (4 != 4));
echo "<br>";

//CONSULTA

$foo = array(5, 0, "hola", "false". "");

var_dump ($foo);

echo "<br>";

print_r ($foo);

// strtoupper, strlower


echo strtoupper( "Mi nombre es Johana");
echo "<br>";
echo strtolower( "Mi nombre es Johana");
echo "<br>";
echo ucfirst( "mi nombre es Johana");
echo "<br>";
echo ucwords( "mi nombre es Johana");

//substr, strpos
echo "<br>";
echo substr( "mi nombre es Johana",5,4);

echo substr( "mi nombre es Johana",5);

echo "<br>";
echo strpos("te quiero mucho bola", "bola");








 ?>
