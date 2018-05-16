<?php

include ("conect_18.php");

$con = mysqli_connect($host, $user, $pw) or die("No se pudo conectar al server");

mysqli_select_db($con, $db) or die ("No se pudo conectar a la base de datos");

$reg = mysqli_query($con,"SELECT ID FROM codigof WHERE NOMBRE = '$_POST[nombre]'");

if ($re=mysqli_fetch_array($reg))
 {
  mysqli_query($con, "DELETE FROM codigof WHERE  NOMBRE = '$_POST[nombre]'");
  echo "datos eliminados";
}else {
  echo "Datos no han sido eliminados";
}





 ?>
