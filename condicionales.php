<?php

if (7 == 8 && 6 == 8)
{
echo "esto es verdad";
}

elseif (3 == 3){
echo "la segunda consicion es verdad";

}else {

  echo "esto no es verdad";
}

echo "<br>";
// bucle while

$aumento = 5;
       while($aumento < 10)
       {
         echo $aumento."<br>";
         $aumento++;
       }

echo "hasta aquí funciona". "<br>";

//bucle do while

$variable1 = 9;
do {
    echo $variable1;
} while ($variable1 < 9);

//comparando con while

$variable2 = 9;

while ($variable2 <9)
{

  echo $variable2;
}

// Bucle for

for ($var=5; $var >1 ; $var--) {

  echo $var. "<br>";
}

//bucle foreach en array predefinido


$predefinido = array('elemento1', "elemento2" );

foreach ($predefinido as $elementos)
 {
    echo $elementos. "<br>";


  }

  //bucle foreach en array personalizado o asociativo

  $asociativo = array ("clave1"=>"elemento1", "clave2"=> "elemento2");

foreach ($asociativo as $claves => $elemento) {
   echo $claves." = ". $elemento. "<br>";
}


  ?>
