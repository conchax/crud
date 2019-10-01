<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    include("conexion.php");

    $id=$_GET["id"];
    $base->query("DELETE FROM DATOS_USUARIOS WHERE ID='$id'");

    header("Location:index.php");

    ?>
  </body>
</html>
