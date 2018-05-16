<?php
//leer archivos de texto mediante php

$archivo=fopen("archivo.txt","r");


While(!feof($archivo))
{
    $traer = fgets($archivo);
    $saltodelinea = nl2br($traer);
    echo $saltodelinea;

}





 ?>
