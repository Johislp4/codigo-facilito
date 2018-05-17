<?php

include("connect_codigof.php");

$con = mysqli_connect($host,$user,$pw) or die("problemas al conectar con el servidor");

mysqli_select_db($con,$db) or die("problemas al conectar la BD");

mysqli_query($con,"UPDATE codigof SET NOMBRE='$_POST[nuevo]' WHERE NOMBRE='$_POST[viejo]'");

echo "Actualización correcta";




 ?>
