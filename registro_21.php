<?php
include("conect_18.php");

if (isset($_POST['nombre']) && !empty($_POST['nombre']) &&
isset($_POST['user']) && !empty($_POST['user']) &&
isset($_POST['pw']) && !empty($_POST['pw']) &&
isset($_POST['pw2']) && !empty($_POST['pw2']) &&
isset($_POST['email']) && !empty($_POST['email']) &&
$_POST['pw'] == $_POST['pw2'])
{
  $con = mysqli_connect($host, $user, $pw) or die("problemas al conectar con server");
  mysqli_select_db($con, $db) or die("problemas al conectar DB");
  mysqli_query($con, "INSERT INTO registro (NOMBRE, USER,PW, EMAIL) VALUES ('$_POST[nombre]','$_POST[user]', '$_POST[pw]' , '$_POST[email]')");

echo "Datos inseratos:"."<br>";
echo "Nombre:".$_POST['nombre']."<br>";
echo "Usuario:".$_POST['user']."<br>";
echo "Password:".$_POST['pw']."<br>";
echo "E-mail:".$_POST['email']."<br>";
}else {
  echo "Verifica que llenaste todos los campos y las contraseñas coinciden";
}






 ?>
