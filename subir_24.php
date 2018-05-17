<?php
//se crea una variable que contiene el nombre de la carpeta
$carpeta = "files/";
//Se abre la carpeta para poder guardar en ella
opendir($carpeta);
//muestra primero el destino de la foto que está en la variable"$carpeta, luego la guarda con su nombre
$destino = $carpeta.$_FILES['foto']['name'];
// se trae de la fuente donde se encuentra y se guarda en el nuevo destino "$destino"
copy($_FILES['foto']['tmp_name'],$destino);
echo "archivo subido exitosamente";
//Muestra la imágen
$nombre=$_FILES['foto']['name'];
echo "<img src=\"files/$nombre\">"."<br>";
//Mostrar otros atributos:
//Nombre de la foto
echo $_FILES['foto']['name']."<br>";
//peso en bytes de la foto
echo $_FILES['foto']['size']."bytes";


?>
