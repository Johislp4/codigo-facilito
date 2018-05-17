<?php
//Restringiendo la página: para que sólo la pueda ver usuario iniciado sesión y que esten registrados

session_start();
if (isset($_SESSION['username']))
{
echo "Puedes ver esta página";
//Link para destruir o cerrar sesiónote
echo "<br><a href=destruir.php>Cerrar sesión</a>";
}else {
  echo "No puedes ver esta pagina. Registrate e inicia sesión";


}


 ?>
