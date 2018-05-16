<<?php

session_start();
include("conect_18.php");

if (isset($_POST['user']) && !empty($_POST['user']) &&
isset($_POST['pw']) && !empty($_POST['pw']))
{
  $con = mysqli_connect($host,$user,$pw) or die("problemas al conectar server");

  mysqli_select_db($con, $db) or die("problemas al conectar con la BD");
  $sel = mysqli_query($con,"SELECT USER, PW FROM registro WHERE USER='$_POST[user]'");

  $sesion = mysqli_fetch_array($sel);

if ($_POST['pw'] == $sesion['PW'])
{
  $_SESSION['username'] = $_POST['user'];
  echo "Sesion exitosa";
  }
  else {
    echo "Combinación erronea";

}

}else {
  echo "Debes llenar ambos campos";
}



 ?>
