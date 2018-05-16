<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Mi primera calculadora</title>
  </head>
  <body>
    <form action="proc.php" method="post" name "calc">
      <label>Introduzca los valores:</label></br>

      <input type="text" name="c1"/><br /><br />
      <input type="text" name="c2"/><br /><br />
      <input type="text" name="c3"/><br /><br />

      <label>Selecciona la operacion:<br/>
      <select name="lista">
        <option value="sumar">Sumar</option>
        <option value="restar">Restar</option>
        <option value="multiplicar">Multiplicar</option>
        <option value="dividir">Dividir</option>

      </select>
    </label><br />


        <input type="submit" value="Ver resultados"/><br/><br/>


    <form/>
  </body>
</html>
