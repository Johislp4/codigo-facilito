<?php

include("conect_18.php"); //permite inserater otros scripts dentro del actual (necesitamos incluir las variables de acceso a la BD)
if (isset($_POST["nombre"]) && !empty($_POST["nombre"]) &&
    isset($_POST["pw"]) && !empty($_POST["pw"]))
{
 //Conectar con el servidor

$con=mysqli_connect($host,$user,$pw) or die("problemas al conectar");

//conectar a la base de datos
mysqli_select_db( $con, $db) or die("problemas al conectar con la base de datos");

//Insertar los datos (permite realizar consultas)

 mysqli_query($con,"INSERT INTO codigof (NOMBRE,PW) VALUES ('$_POST[nombre]','$_POST[pw]')");
 echo "Datos insertados";
 echo mysqli_error($con);

}else {
  echo "Problemas al insertar datos";

}




 ?>
