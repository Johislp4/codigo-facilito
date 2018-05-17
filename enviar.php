<?php
if (isset($_POST['asunto'])&& !empty($_POST['asunto']) &&
 isset($_POST['mensaje']) && !empty($_POST['mensaje']))

  {
  //permite enviar correos la funcion Mail

$destino = "johislp4@gmail.com";
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
$desde = "from:". "cursoCodigoFacilito";
  mail($destino, $asunto, $mensaje, $desde);
  echo "Correo enviado";
}
else {
  echo "problemas al enviar";
}


 ?>
