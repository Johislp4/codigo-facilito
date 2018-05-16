<?php

//Crear y guardar archivos de texto en php
$file=fopen("archivo.txt", "a");

fwrite($file,"datos:");
fwrite($file,"\n");
fwrite($file,$_POST ["nombre"]);
fwrite($file,"\n");
fwrite($file,$_POST ["comentario"]);
fwrite($file,"\n");
fwrite($file,"------------");
fclose($file);

echo "datos guardados";


 ?>
