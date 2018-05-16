<?php

include("conect_18.php");

$con = mysqli_connect($host,$user,$pw) or die("problemas al conectar server");

mysqli_select_db( $con, $db) or die("problemas al conectar con la base de datos");

//seleccionar los datos (permite realizar consultas)

 $registro = mysqli_query($con,"SELECT * FROM codigof WHERE NOMBRE='$_POST[nombre]''") or die("problemas en consulta".mysqli());

 while($reg=mysqli_fetch_array($registro)){

   echo $reg['NOMBRE']."<br>";
   echo $reg['PW']."<br>";

//Seleccion de registros específicos

 }




 ?>
